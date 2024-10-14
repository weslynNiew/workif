@extends('layouts.app-master')

@section('content')

<div class="border border-custom p-4 rounded">
    <h1>Usuarios</h1>
    <div class="lead">
        Gerenciamento de Usuarios
        <br/>
        <a
        	href="{{ route('users.create') }}"
        	class="btn btn-primary btn-sm float-right">
        	Criar novo
        </a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

	<table class="table table-striped cor-bege">
        <thead class="cor-bege">
        <tr>
            <th scope="col" width="1%">ID</th>
            <th scope="col">Nome</th>
            <th scope="col" width="15%">Email</th>
            <th scope="col" width="1%" colspan="3">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('visualizar-frequencia.index', $user->id) }}" class="btn btn-secondary btn-sm">Frequências</a>
                    </td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
						{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Remover', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex">
        {!! $users->links() !!}
    </div>

</div>


@endsection
