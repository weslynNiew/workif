@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <form method="post" action="{{ route('login.perform') }}" class="w-25">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                <label for="floatingEmail">E-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <a href="{{route('esqueci-senha.index')}}" style="color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1)); text-decoration: underline;"><small>Esqueceu sua senha?</small></a>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary w-100" type="submit">Entrar</button>
                <br/><br/>
                <a href="{{ route('register.show') }}" class="btn btn-lg btn-warning w-100">Cadastro</a>
            </div>

            @include('auth.partials.copy')
        </form>
    </div>
@endsection
