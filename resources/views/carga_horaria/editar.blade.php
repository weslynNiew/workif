@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-4 rounded">
        <h1>Horários</h1>
        <div class="lead">
            Editar Horário
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        @php
            $dias = array('Segunda','Terça','Quarta','Quinta','Sexta','Sabado','Domingo')
        @endphp
        <div class="container mt-4">
            <form method="POST" action="{{route('horarios.update')}}">
                <input type="hidden" name="horario" value="{{$horario->id}}">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Dia</label>
                    <input
                        type="text"
                        class="form-control" value="{{$dias[$horario->dia - 1]}}"
                        disabled>
                </div>
                <hr/>
                <h3>
                    Período 1 (06:00 - 12:00)
                </h3>
                <div class="mb-3">
                    <label for="entrada_1" class="form-label">Entrada</label>
                    <input
                        type="time"
                        class="form-control"
                        name="entrada_1"
                        placeholder="entrada_1" value="{{$horario->entrada_1}}">
                    @if ($errors->has('entrada_1'))
                        <span class="text-danger text-left">{{ $errors->first('entrada_1') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="saida_1" class="form-label">Saída</label>
                    <input
                        type="time"
                        class="form-control"
                        name="saida_1"
                        placeholder="saida_1" value="{{$horario->saida_1}}">
                    @if ($errors->has('saida_1'))
                        <span class="text-danger text-left">{{ $errors->first('saida_1') }}</span>
                    @endif
                </div>
                <hr/>
                <h3>
                    Período 2 (13:15 - 18:30)
                </h3>
                <div class="mb-3">
                    <label for="entrada_2" class="form-label">Entrada</label>
                    <input
                        type="time"
                        class="form-control"
                        name="entrada_2"
                        placeholder="entrada_2" value="{{$horario->entrada_2}}">
                    @if ($errors->has('entrada_2'))
                        <span class="text-danger text-left">{{ $errors->first('entrada_2') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="saida_2" class="form-label">Saída</label>
                    <input
                        type="time"
                        class="form-control"
                        name="saida_2"
                        placeholder="saida_2" value="{{$horario->saida_2}}">
                    @if ($errors->has('saida_2'))
                        <span class="text-danger text-left">{{ $errors->first('saida_2') }}</span>
                    @endif
                </div>
                <hr/>
                <h3>
                    Período 3 (19:00 - 23:00)
                </h3>
                <div class="mb-3">
                    <label for="entrada_3" class="form-label">Entrada</label>
                    <input
                        type="time"
                        class="form-control"
                        name="entrada_3"
                        placeholder="entrada_3" value="{{$horario->entrada_3}}">
                    @if ($errors->has('entrada_3'))
                        <span class="text-danger text-left">{{ $errors->first('entrada_3') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="saida_3" class="form-label">Saída</label>
                    <input
                        type="time"
                        class="form-control"
                        name="saida_3"
                        placeholder="saida_3" value="{{$horario->saida_3}}">
                    @if ($errors->has('saida_3'))
                        <span class="text-danger text-left">{{ $errors->first('saida_3') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('horarios.index',$horario->user->id) }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>


    </div>

@endsection
