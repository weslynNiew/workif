<?php

namespace App\Http\Controllers;

use App\Models\Ponto;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrequenciaUsuarioController extends Controller
{
    public function index($usuario, Request $request)
    {
        $usuario = User::findOrFail($usuario);
        $mes = Carbon::now()->month;
        $ano = Carbon::now()->year;

        $pontosPeriodoUm = Ponto::periodoUm()->get();
        $pontosPeriodoDois = Ponto::periodoDois()->get();
        $pontosPeriodoTres = Ponto::periodoTres()->get();

        return view("users.frequencias.index")
            ->with('pontosPeriodoUm', $pontosPeriodoUm)
            ->with('pontosPeriodoDois', $pontosPeriodoDois)
            ->with('pontosPeriodoTres', $pontosPeriodoTres)
            ->with('mes', $mes)
            ->with('ano', $ano)
            ->with('usuario', $usuario);
    }
}
