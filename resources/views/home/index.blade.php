@extends('layouts.app-master')

@section('content')

    <div class="p-5 rounded">

        @auth

            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('visualizar-frequencia.index',['usuario' => auth()->user()->id])}}?page={{\Carbon\Carbon::now('America/Sao_Paulo')->month}}">
                                    <div class="card mb-4 rounded card-icones"
                                         onmouseenter="alterarChecklist(true,'checklist')"
                                         onmouseleave="alterarChecklist(false,'checklist')">
                                        <img class="card-img-top" src="{{URL::asset('/images/checklistVerde.png')}}" style="transform: scale(0.8)"
                                             alt="Checklist Pic" id="checklist">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-white">Visualizar Frequência</h5>


                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="/bater-ponto">
                                    <div class="card mb-4 rounded card-icones" onmouseenter="alterarRelogio(true,'relogio')"
                                         onmouseleave="alterarRelogio(false,'relogio')">
                                        <img class="card-img-top" src="{{URL::asset('/images/baterpontoVerde.png')}}" style="transform: scale(0.8)"
                                             alt="Checklist Pic" id="relogio">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-white">Bater Ponto</h5>


                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{route('horarios.index',auth()->user()->id)}}">
                                    <div class="card mb-4 rounded card-icones"
                                         onmouseenter="alterarFuncionarios(true,'funcionarios')"
                                         onmouseleave="alterarFuncionarios(false,'funcionarios')">
                                        <img class="card-img-top" src="{{URL::asset('/images/funcionariosVerde.png')}}" style="transform: scale(0.8)"
                                             alt="Checklist Pic" id="funcionarios">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-white">Gerenciar Horários</h5>


                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
                @guest
                    <h1>Bem-vindo!</h1>
                    <p class="lead">Por favor, faça o login para entrar na área restrita do sistema</p>
                @endguest
            </div>
            @endsection
            @push('js')
                <script>
                    function alterarRelogio(hover, element) {
                        var img = document.getElementById(element);

                        if (hover) {
                            img.src = "{{URL::asset('images/baterponto.png')}}";
                        } else {
                            img.src = "{{URL::asset('images/baterpontoVerde.png')}}";
                        }
                    }

                    function alterarChecklist(hover, element) {
                        var img = document.getElementById(element);

                        if (hover) {
                            img.src = "{{URL::asset('/images/checklist.png')}}";
                        } else {
                            img.src = "{{URL::asset('/images/checklistVerde.png')}}";
                        }
                    }

                    function alterarFuncionarios(hover, element) {
                        var img = document.getElementById(element);

                        if (hover) {
                            img.src = "{{URL::asset('images/funcionarios.png')}}";
                        } else {
                            img.src = "{{URL::asset('images/funcionariosVerde.png')}}";
                        }
                    }


                </script>
    @endpush
