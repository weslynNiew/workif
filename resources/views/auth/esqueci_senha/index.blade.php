@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <form method="post" action="{{route('esqueci-senha.token')}}" class="w-25">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Recuperar Senha</h1>
            @if(session('response') && session('class'))
                <div class="{{session('class')}}">
                    {{ session('response') }}
                </div>
            @endif
            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail"
                       required autofocus>
                <label for="floatingEmail">E-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary w-100" type="submit">Enviar Link de Recuperação</button>
            </div>

            <div class="form-group mt-3 text-center">
                <a href="{{ route('login.show') }}"
                   style="color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1)); text-decoration: underline;"><small>Voltar
                        ao Login</small></a>
            </div>

            @include('auth.partials.copy')
        </form>
    </div>
@endsection
