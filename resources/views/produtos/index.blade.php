@extends('layouts.app-master')
 
@section('content')

<div class="bg-light p-4 rounded">
    <h1>Produtos</h1>
    <div class="lead">
        Gerenciamento de Produtos
        <br/>
        <a
        	href="{{ route('produtos.create') }}"
        	class="btn btn-primary btn-sm float-right">
        	Criar novo
        </a>
    </div>
    
    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

	<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" width="1%">ID</th>
            <th scope="col">Nome</th>
            <th scope="col" width="15%">Marca</th>
            <th scope="col" width="15%">Quantidade</th>
            <th scope="col" width="10%">Preço</th>
            <th scope="col" width="15%">Data de vencimento</th>
            <th scope="col" width="1%" colspan="3">Ações</th>    
        </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id }}</th>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ date('d/m/Y', strtotime($produto->data_vencimento)) }}</td>
                    <td><a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-secondary btn-sm">Ver</a>
                    </td>
                    <td><a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
						{!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produto->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Remover', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex">
        {!! $produtos->links() !!}
    </div>

</div>


@endsection