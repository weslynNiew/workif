@extends('layouts.app-master')

@section('content')

    <div class="p-4 rounded">
        <h3>Gerenciar pontos do usuário: {{$usuario->nome}}</h3>
        <br/> @php
            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
        @endphp
        <h4>{{$meses[$mes - 1]}}/{{$ano}}</h4>
        <br/>
        <div class="d-flex justify-content-center">
            <ul class="nav nav-tabs">
                <li><a type="button" id="1periodo" class="btn periodos active" onclick="alterarPeriodos(this.id)"
                       data-toggle="tab" href="#periodo1content">Período 1</a></li>
                <li><a type="button" id="2periodo" class="btn periodos" onclick="alterarPeriodos(this.id)"
                       data-toggle="tab" href="#periodo2content">Período 2</a></li>
                <li><a type="button" id="3periodo" class="btn periodos" onclick="alterarPeriodos(this.id)"
                       data-toggle="tab" href="#periodo3content">Período 3</a></li>
            </ul>
        </div>
        <br/>
        <div class="tab-content">
            <div id="periodo1content" class="tab-pane active">
                <h3>Primeiro Período</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Entrada</th>
                        <th scope="col">Saída</th>
                        <th scope="col">Ocorrência</th>
                        <th scope="col">Total Horas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pontosPeriodoUm as $ponto)
                        <tr>
                            <th>{{ $ponto->created_at->format('d/m/Y') }}</th>
                            <td>{{ $ponto->created_at ? $ponto->created_at->format('H:i:s') : '' }}</td>
                            <td>{{ $ponto->saida ? \Carbon\Carbon::parse($ponto->saida)->format('H:i:s') : '' }}</td>
                            <td>{{ $ponto->Ocorrência }}</td>
                            @if(!empty($ponto->saida))
                                @php
                                    $start  = \Carbon\Carbon::parse($ponto->created_at);
                                    $end    = \Carbon\Carbon::parse($ponto->saida);
                                    $diff = $start->diff($end)->format('%H:%I:%S');
                                @endphp
                            @endif
                            <td>{{ isset($diff) ? $diff : 'Não batido' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="periodo2content" class="tab-pane fade">
                <h3>Segundo Período</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Entrada</th>
                        <th scope="col">Saída</th>
                        <th scope="col">Ocorrência</th>
                        <th scope="col">Total Horas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pontosPeriodoDois as $ponto)
                        <tr>
                            <th>{{ $ponto->created_at->format('d/m/Y') }}</th>
                            <td>{{ $ponto->created_at ? $ponto->created_at->format('H:i:s') : '' }}</td>
                            <td>{{ $ponto->saida ? \Carbon\Carbon::parse($ponto->saida)->format('H:i:s') : 'Não batido' }}</td>
                            <td>{{ !empty($ponto->Ocorrência) ? $ponto->Ocorrência : 'Nenhum' }}</td>
                            @if(!empty($ponto->saida))
                                @php
                                    $start  = \Carbon\Carbon::parse($ponto->created_at);
                                    $end    = \Carbon\Carbon::parse($ponto->saida);
                                    $diff = !empty($end) ? $start->diff($end)->format('%H:%I:%S') : null;
                                @endphp
                            @endif
                            <td>{{ !empty($ponto->saida) ? $diff : 'Não batido' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="periodo3content" class="tab-pane fade">
                <h3>Terceiro Período</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Entrada</th>
                        <th scope="col">Saída</th>
                        <th scope="col">Ocorrência</th>
                        <th scope="col">Total Horas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pontosPeriodoTres as $ponto)
                        <tr>
                            <th>{{ $ponto->created_at->format('d/m/Y') }}</th>
                            <td>{{ $ponto->created_at ? $ponto->created_at->format('H:i:s') : '' }}</td>
                            <td>{{ $ponto->saida ? \Carbon\Carbon::parse($ponto->saida)->format('H:i:s') : '' }}</td>
                            <td>{{ $ponto->Ocorrência }}</td>
                            @if(!empty($ponto->saida))
                                @php
                                    $start  = \Carbon\Carbon::parse($ponto->created_at);
                                    $end    = \Carbon\Carbon::parse($ponto->saida);
                                    $diff = $start->diff($end)->format('%H:%I:%S');
                                @endphp
                            @endif
                            <td>{{ isset($diff) ? $diff : 'Não batido' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @push('js')
        <script>
            alterarPeriodos = function (botaoId) {
                let botao = $("#" + botaoId);
                $('.periodos').removeClass('btn-primary')

                botao.removeClass('btn-secondary').addClass('btn-primary');
            }
        </script>
    @endpush
@endsection
