@extends('layouts.app-master')

@section('content')

    <div class="border border-custom p-4 rounded">
        <h1>Horários do usuário - {{ $user->nome }}</h1>
        <div class="lead">
            Gerenciamento de Horários
            <br/>
        </div>
        @php
            $dias = array('Segunda','Terça','Quarta','Quinta','Sexta','Sabado','Domingo')
        @endphp
        @if($horarios->count() == 0)
            <a type="button" class="btn btn-primary" href="{{route('horarios.criar',$user->id)}}">Criar horários</a>
        @endif
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped cor-bege">
            <thead class="cor-bege">
            <tr>
                <th scope="col">Dia</th>
                <th scope="col" width="15%">Entrada 1</th>
                <th scope="col" width="15%">Saída 1</th>
                <th scope="col" width="15%">Entrada 2</th>
                <th scope="col" width="15%">Saída 2</th>
                <th scope="col" width="15%">Entrada 3</th>
                <th scope="col" width="15%">Saída 3</th>
                <th scope="col" width="1%" colspan="3">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($horarios as $horario)
                <tr>
                    <td>{{ $dias[$horario->dia - 1] }}</td>
                    <td>{{ $horario->entrada_1 }}</td>
                    <td>{{ $horario->saida_1 }}</td>
                    <td>{{ $horario->entrada_2 }}</td>
                    <td>{{ $horario->saida_2 }}</td>
                    <td>{{ $horario->entrada_3 }}</td>
                    <td>{{ $horario->saida_3 }}</td>
                    <td><a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
