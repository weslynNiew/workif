@extends('layouts.app-master')

@section('content')

    <div class="p-4 rounded">

        <h3>Funcionário:
            <select id="usuarioSelect" onchange="alterarUsuario()">
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{$user->id}}" {{$user->id == request('usuario')->id ? 'selected' : ''}}>{{$user->nome}}</option>
                @endforeach
            </select></h3>
        <br/> @php
            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
        @endphp
        <h4>{{$meses[(request('page') ?? 1) - 1]}}/<span data-toggle="modal" data-target="#exampleModal"
                                                         class="text-primary text-decoration-underline"
                                                         style="cursor: pointer;">{{$ano}}</span>
        </h4>
        <br/>
        <div class="col-12">
            <hr/>
            <div class="cor-bege">
                <div class="card-body">
                    <form method="get"
                          action="{{route('visualizar-frequencia.buscar',auth()->user()->id)}}">
                        <input type="hidden" name="page" value="{{request('page')}}">
                        <input type="hidden" name="ano" value="{{$ano}}">
                        <div class="row">


                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="inicio">Data inicial</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" id="inicio" name="inicio" class="form-control"
                                           value="{{ request('inicio') }}"
                                           min="{{ $ano }}-01-01" max="{{ $ano }}-12-31">
                                </div>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="fim">Data final</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" id="fim" name="fim" class="form-control"
                                           value="{{ request('fim') }}"
                                           min="{{ $ano }}-01-01" max="{{ $ano }}-12-31">
                                </div>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label invisible">Hidden Label</label>
                                <div>
                                    <button type="submit" class="btn btn-primary">Localizar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <hr/>
        </div>
        <br/>
        <div class="d-flex justify-content-center">
            @include('visualizar_frequencias.tabela')
        </div>
        {{ $dadosDoAno->withQueryString()->links() }}
        <div class="d-flex justify-content-end align-items-center mb-3">
            <a type="button"
               href="{{route('visualizar-frequencia.relatorio',['usuario' => request('usuario'),'mes' => $dadosDoAno->currentPage()])}}"
               class="btn btn-lg btn-primary rounded-5">Gerar Relatório</a>
        </div>
    </div>
    @include('visualizar_frequencias.ano_modal')
@endsection
<script>

    function alterarUsuario() {
        // Obter o valor do usuário selecionado
        var selectedUserId = document.getElementById('usuarioSelect').value;

        // Obter a URL atual
        var currentUrl = window.location.href;

        // Extrair a parte da URL antes do ID do usuário
        var baseUrl = currentUrl.split('/visualizar-frequencia/')[0];

        // Manter o resto da URL (ex: parâmetros de paginação)
        var queryParams = currentUrl.split('?')[1] ? '?' + currentUrl.split('?')[1] : '';

        // Redirecionar para a nova URL com o ID do usuário selecionado
        window.location.href = baseUrl + '/visualizar-frequencia/' + selectedUserId + queryParams;
    }
</script>
