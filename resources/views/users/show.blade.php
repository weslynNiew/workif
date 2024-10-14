@extends('layouts.app-master')
@section('content')
<div class="border border-custom p-4 rounded">
<h1>Dados do Usuario</h1>
<div class="lead">
</div>
<div class="container mt-4">
<div>
<b>Nome:</b> {{ $user->nome }}
</div>
<div>
<b>Email:</b> {{ $user->email }}
</div>
<div>
<b>siape:</b> {{ $user->siape }}
</div>
<div>
<b>Carga Horaria(semanal):</b> {{ $user->carga_horaria_semanal }}
</div>
<div>
<b>Cargo Efetivo:</b> {{ $user->cargo_efetivo }}
</div>
<div>
<b>Função:</b> {{ $user->funcao }}
</div>

<div>
    <b>Criado em:</b> {{ $user->created_at->format('d/m/Y') }}
    </div>
    <div>
        <b>Editado em:</b> {{ $user->updated_at->format('d/m/Y ') }}
        </div>
</div>
</div>
<div class="mt-4">
<a href="{{ URL::previous() }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
