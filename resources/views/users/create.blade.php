@extends('layouts.app-master')

@section('content')

<div class="bg-light p-4 rounded">
    <h1>Usuarios</h1>
    <div class="lead">
        Dados do Usuario
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

	<div class="container mt-4">
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                	<label for="nome" class="form-label">Nome</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="nome"
                    	placeholder="Nome" required>

                	@if ($errors->has('nome'))
                    	<span class="text-danger text-left">{{ $errors->first('name') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="email" class="form-label">email</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="email"
                    	placeholder="email" required>
                	@if ($errors->has('email'))
                    	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
                	@endif
            	</div>
				<div class="mb-3">
                	<label for="siape" class="form-label">Siape</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="siape"
                    	placeholder="siape" required>
                	@if ($errors->has('siape'))
                    	<span class="text-danger text-left">{{ $errors->first('siape') }}</span>
                	@endif
            	</div>
				<div class="mb-3">
                	<label for="carga_horaria_semanal" class="form-label">Carga Horária Semanal</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="carga_horaria_semanal"
                    	placeholder="Carga horária semanal" required>
                	@if ($errors->has('carga_horaria_semanal'))
                    	<span class="text-danger text-left">{{ $errors->first('carga_horaria_semanal') }}</span>
                	@endif
            	</div>
				<div class="mb-3">
                	<label for="cargo_efetivo" class="form-label">Cargo Efetivo</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="cargo_efetivo"
                    	placeholder="cargo_efetivo" required>
                	@if ($errors->has('cargo_efetivo'))
                    	<span class="text-danger text-left">{{ $errors->first('cargo_efetivo') }}</span>
                	@endif
            	</div>
				<div class="mb-3">
                	<label for="funcao" class="form-label">Função</label>
                	<input
                    	type="text"
                    	class="form-control"
                    	name="funcao"
                    	placeholder="funcao" required>
                	@if ($errors->has('funcao'))
                    	<span class="text-danger text-left">{{ $errors->first('funcao') }}</span>
                	@endif
            	</div>
                <div class="mb-3">
                	<label for="password" class="form-label">Senha</label>
                	<input
                    	type="password"
                    	class="form-control"
                    	name="password"
                    	placeholder="Senha" required>
                	@if ($errors->has('password'))
                    	<span class="text-danger text-left">{{ $errors->first('password') }}</span>
                	@endif
            	</div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>


</div>


@endsection
