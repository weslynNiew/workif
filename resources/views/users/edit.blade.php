@extends('layouts.app-master')

@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Alterar Usuario</h1>
    	<div class="lead">

    	</div>

    	<div class="container mt-4">
        	<form method="post" action="{{ route('users.update', $user->id) }}">
            	@method('patch')
            	@csrf
            	<div class="mb-3">
                	<label for="nome" class="form-label">Nome</label>
                	<input value="{{ $user->nome }}"
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
                	<input value="{{ $user->email }}"
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
                	<input value="{{ $user->siape }}"
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
                	<input value="{{ $user->carga_horaria_semanal }}"
                    	type="number"
                    	class="form-control"
                    	name="carga_horaria_semanal"
                    	placeholder="carga_horaria_semanal" required>
                	@if ($errors->has('carga_horaria_semanal'))
                    	<span class="text-danger text-left">{{ $errors->first('carga_horaria_semanal') }}</span>
                	@endif
            	</div>
				<div class="mb-3">
                	<label for="cargo_efetivo" class="form-label">Cargo Efetivo</label>
                	<input value="{{ $user->cargo_efetivo }}"
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
                	<input value="{{ $user->funcao }}"
                    	type="text"
                    	class="form-control"
                    	name="funcao"
                    	placeholder="funcao" required>
                	@if ($errors->has('funcao'))
                    	<span class="text-danger text-left">{{ $errors->first('funcao') }}</span>
                	@endif
            	</div>


            	<button type="submit" class="btn btn-success">Salvar</button>
            	<a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        	</form>
    	</div>

	</div>
@endsection


