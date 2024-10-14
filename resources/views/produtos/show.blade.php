@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Dados do produto</h1>
<div class="lead">
</div>
<div class="container mt-4">
<div>
<b>Nome:</b> {{ $produto->nome }}
</div>
<div>
<b>Marca:</b> {{ $produto->marca }}
</div>
<div>
<b>Modelo:</b> {{ $produto->modelo }}</div>
<div>
<b>Quantidade:</b> {{ $produto->quantidade }}
</div>
<div>
<b>Preço:</b> {{ $produto->preco }}
</div>
<div>
<b>Data de vencimento:</b> {{ date('d/m/Y', strtotime($produto->data_vencimento)) }}
</div>
</div>
</div>
<div class="mt-4">
<a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
