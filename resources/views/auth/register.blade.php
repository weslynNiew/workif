@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <form method="post" action="{{ route('register.perform') }}" class="w-25">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Cadastre-se</h1>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome" required autofocus>
                <label for="floatingNome">Nome</label>
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@exemplo.com" required>
                <label for="floatingEmail">E-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group form-floating mb-3">
                <input type="number" class="form-control" name="siape" value="{{ old('siape') }}" placeholder="Siape" required>
                <label for="floatingSiape">Matrícula SIAPE</label>
                @if ($errors->has('siape'))
                    <span class="text-danger">{{ $errors->first('siape') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="number" class="form-control" name="carga_horaria_semanal" value="{{ old('carga_horaria_semanal') }}" placeholder="Carga Horária Semanal" required>
                <label for="floatingCargaHoraria">Carga horária semanal</label>
                @if ($errors->has('carga_horaria_semanal'))
                    <span class="text-danger">{{ $errors->first('carga_horaria_semanal') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="cargo_efetivo" value="{{ old('cargo_efetivo') }}" placeholder="Cargo Efetivo" required>
                <label for="floatingCargoEfetivo">Cargo Efetivo</label>
                @if ($errors->has('cargo_efetivo'))
                    <span class="text-danger">{{ $errors->first('cargo_efetivo') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="funcao" value="{{ old('funcao') }}" placeholder="Função" required>
                <label for="floatingFuncao">Função</label>
                @if ($errors->has('funcao'))
                    <span class="text-danger">{{ $errors->first('funcao') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha" required>
                <label for="floatingConfirmPassword">Confirme a senha</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary w-100" type="submit">Registrar</button>
                <br/><br/>
                <a href="{{ route('login.show') }}" class="btn btn-lg btn-warning w-100">Login</a>
            </div>

            @include('auth.partials.copy')
        </form>
    </div>
@endsection
