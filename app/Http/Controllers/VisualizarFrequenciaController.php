<?php

namespace App\Http\Controllers;

use App\Models\Ponto;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use PDF;

class VisualizarFrequenciaController extends Controller
{
    public function index(Request $request, User $usuario)
    {
        $ano = $request->ano ?: Carbon::now('America/Sao_Paulo')->year;

        // Inicializando o array para os 12 meses

        $dadosDoAno = $this->montaDados($ano, $usuario->id);


        // Convertendo o array para uma coleção e aplicando paginação
        $dadosDoAnoCollection = collect($dadosDoAno);
        $perPage = 1; // Definindo quantos meses por página
        $page = $request->get('page', 1);
        $paginatedData = new LengthAwarePaginator(
            $dadosDoAnoCollection->forPage($page, $perPage),
            $dadosDoAnoCollection->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view("visualizar_frequencias.index")
            ->with('ano', $ano)
            ->with('usuario', $usuario)
            ->with('dadosDoAno', $paginatedData);
    }

    public function buscar(Request $request, User $usuario)
    {
        if (empty($request->inicio) && empty($request->fim)) {
            return $this->index($request, $usuario);
        }

        $ano = $request->ano ?: Carbon::now('America/Sao_Paulo')->year;

        // Obter as datas de início e fim dos inputs
        $inicio = $request->inicio ? Carbon::parse($request->inicio) : Carbon::now('America/Sao_Paulo');
        $fim = $request->fim ? Carbon::parse($request->fim) : Carbon::now('America/Sao_Paulo')->endOfYear();

        // Inicializando o array para os 12 meses
        $dadosDoAno = $this->montaDados($ano, $usuario);

        // Filtrar os dados do ano de acordo com o intervalo de datas
        $dadosFiltrados = $this->filtrarDadosPorIntervalo($dadosDoAno, $inicio, $fim);

        // Convertendo o array para uma coleção e aplicando paginação
        $dadosDoAnoCollection = collect($dadosFiltrados);
        $perPage = 1; // Definindo quantos meses por página
        $page = $request->get('page', 1);

        $paginatedData = new LengthAwarePaginator(
            $dadosDoAnoCollection->forPage($page, $perPage),
            $dadosDoAnoCollection->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view("visualizar_frequencias.index")
            ->with('ano', $ano)
            ->with('usuario', $usuario)
            ->with('dadosDoAno', $paginatedData);
    }

    private function montaDados($ano, $usuario)
    {
        $dadosDoAno = [];

        // Iterando pelos meses do ano (de 1 a 12)
        for ($mes = 1; $mes <= 12; $mes++) {
            $primeiroDia = Carbon::create($ano, $mes, 1)->startOfMonth();
            $ultimoDia = Carbon::create($ano, $mes, 1)->endOfMonth();

            // Consulta para obter os pontos do mês desejado
            $pontos = Ponto::whereBetween('created_at', [$primeiroDia, $ultimoDia])->where('user_id', $usuario)
                ->get();

            // Inicializando o array para os dias do mês
            $dadosDoMes = [];

            // Iterando pelos dias do mês (de 1 ao último dia do mês)
            for ($dia = 1; $dia <= $ultimoDia->day; $dia++) {
                // Filtrando os pontos para o dia atual e agrupando por período
                $pontosDoDia = $pontos->filter(function ($ponto) use ($ano, $mes, $dia) {
                    $dataAtual = Carbon::create($ano, $mes, $dia);
                    return $ponto->created_at->format('Y-m-d') === $dataAtual->format('Y-m-d');
                })->groupBy('periodo')->map(function ($pontosPorPeriodo) {
                    return $pontosPorPeriodo->map(function ($ponto) {
                        return [
                            'id' => $ponto->id,
                            'user_id' => $ponto->user_id,
                            'latitude' => $ponto->latitude,
                            'longitude' => $ponto->longitude,
                            'periodo' => $ponto->periodo,
                            'saida' => Carbon::create($ponto->saida)->format('d/m/y H:i'),
                            'ocorrencia' => $ponto->ocorrencia,
                            'created_at' => $ponto->created_at->format('d/m/y H:i'),
                            'totalHoras' => $ponto->totalHoras
                        ];
                    });
                })->toArray();

                // Montando a estrutura do array com coleções
                $dadosDoMes[$dia] = $pontosDoDia ?: [];
            }

            // Atribuindo os dados do mês ao array do ano
            $dadosDoAno[$mes] = $dadosDoMes;
        }

        return $dadosDoAno;

    }

    private function filtrarDadosPorIntervalo($dadosDoAno, $inicio, $fim)
    {
        $dadosFiltrados = [];

        foreach ($dadosDoAno as $mes => $dias) {
            foreach ($dias as $dia => $pontos) {
                $dataAtual = Carbon::create($inicio->year, $mes, $dia);

                if ($dataAtual->between($inicio, $fim)) {
                    if (!isset($dadosFiltrados[$mes])) {
                        $dadosFiltrados[$mes] = [];
                    }

                    $dadosFiltrados[$mes][$dia] = $pontos;
                }
            }
        }

        return $dadosFiltrados;
    }

    public function criarOcorrencia($dia, $mes, $ano)
    {
        return view('pontos.ocorrencia')
            ->with('dia', $dia)
            ->with('mes', $mes)
            ->with('ano', $ano);
    }

    public function salvarOcorrencia(Request $request)
    {
        $ponto = new Ponto();
        $dia = $request->dia;
        $mes = $request->mes;
        $ano = $request->ano;

        if ($request->periodo == 1) {
            $ponto->created_at = Carbon::create($ano, $mes, $dia, 6, 0, 0); // 06:00 AM
            $ponto->saida = $ponto->created_at->addSecond();
        }

        if ($request->periodo == 2) {
            $ponto->created_at = Carbon::create($ano, $mes, $dia, 12, 0, 0); // 12:00 PM
            $ponto->saida = $ponto->created_at->addSecond();
        }

        if ($request->periodo == 3) {
            $ponto->created_at = Carbon::create($ano, $mes, $dia, 18, 30, 0); // 18:30 PM
            $ponto->saida = $ponto->created_at->addSecond();
        }

        $ponto->user_id = $request->usuario;
        $ponto->periodo = $request->periodo;
        $ponto->ocorrencia = $request->sigla;
        $ponto->latitude = 0;
        $ponto->longitude = 0;
        $ponto->save();

        return redirect()->route('visualizar-frequencia.index', $request->usuario);
    }

    public function relatorio(Request $request, User $usuario, $mes)
    {
        $ano = $request->ano ?: Carbon::now('America/Sao_Paulo')->year;

        // Inicializando o array para os 12 meses

        $dadosDoAno = $this->montaDados($ano, $usuario->id);

        $filteredArray = [
            $mes => $dadosDoAno[$mes] // Mantém a chave 2 e seus itens
        ];
        // Convertendo o array para uma coleção e aplicando paginação
        $dadosDoAnoCollection = collect($filteredArray);

        $pdf = PDF::loadView('visualizar_frequencias.relatorio.relatorio', [
            'ano' => $ano,
            'usuario' => $usuario,
            'dadosDoAno' => $dadosDoAnoCollection,
        ])->setPaper('a3', 'portrait'); // ou 'portrait' para vertical

        $nome = $usuario->nome . '-' . $mes . '-' . $ano;

        return $pdf->download($nome . '.pdf');

    }
}
