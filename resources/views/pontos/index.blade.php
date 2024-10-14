@extends('layouts.app-master')

@section('content')

    @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
    @endif

    <div class="p-4 rounded">
        <h1 class="mb-2"><strong id="hora">{{\Carbon\Carbon::now('America/Sao_Paulo')->format('H:i:s')}}</strong></h1>
        <h2 id="data" class="mb-1">{{\Carbon\Carbon::now('America/Sao_Paulo')->format('d/m/Y')}}</h2>
        @php
            $semana = array('Domingo', 'Segunda - Feira', 'Terça - Feira', 'Quarta - Feira', 'Quinta - Feira', 'Sexta - Feira', 'Sábado');

            $data = date('Y-m-d');
        // Variável que recebe o dia da semana (0 = domingo, 1 = segunda, 2 = terca ...)
            $dia = date('w', strtotime($data));
        @endphp
        <h3 class="mb-4">{{$semana[$dia]}}</h3>

        <button @if($pontos && ($pontos->last() && empty($pontos->last()->saida))) disabled @endif type="button" class="btn btn-lg btn-primary rounded" data-toggle="modal" data-target="#baterPontoModal">
            <i class="fas fa-clock me-2"></i>Registrar
        </button>
       
        @if($pontos && ($pontos->last() && empty($pontos->last()->saida)))
            <a href="{{route('bater-ponto.fechar')}}" type="button" class="btn btn-lg btn-primary rounded">
                <i class="fas fa-clock me-2"></i>Registrar
            </a>
        @endif
        <br/>
        <table class="table table-striped mt-3">
            <thead>
            <tr>
            
        
                <th scope="col" width="15%">Entrada/Saída</th>
                <th scope="col" width="15%">Periodo</th>
                <th scope="col" width="15%">Latitude</th>
                <th scope="col" width="10%">Longitude</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pontos as $ponto)
                <tr>
                
                    
                    <td>
                        {{ $ponto->created_at ? $ponto->created_at->format('H:i:s') : '' }}
                        /
                        {{$ponto->saida ? Carbon\Carbon::parse($ponto->saida)->format('H:i:s') : 'Não batido'}}
                    </td>
                    <td>{{$ponto->periodo}}º</td>
                    <td>{{ $ponto->latitude }}</td>
                    <td>{{ $ponto->longitude }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

       
     



        <div class="d-flex">
            {{--            {!! $pontos->links() !!}--}}
        </div>

        @include('pontos.bater_ponto_modal')

    </div>

    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Cria intervalo
        const interval = setInterval(() => {
            // Pega o horário atual
            const now = new Date();

            // Formata a data conforme dd/mm/aaaa hh:ii:ss
            const hora = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());
            const data = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear();
            // Exibe na tela usando a div#data-hora
            document.getElementById('hora').innerHTML = hora;
            document.getElementById('hora-modal').innerHTML = hora;
            document.getElementById('data').innerHTML = data;
        }, 1000);


    </script>

@endsection
