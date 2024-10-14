@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <form method="post" action="{{route('esqueci-senha.perform')}}" class="w-25">
            @method('PUT')
            @csrf

            <h1 class="h3 mb-3 fw-normal text-center">Redefinir Senha</h1>

            @include('layouts.partials.messages')

            <!-- Campo oculto para o token -->
            <input type="hidden" name="token" value="{{ request('token') }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Nova Senha" required>
                <label for="floatingPassword">Nova Senha</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a Nova Senha" required>
                <label for="floatingPasswordConfirm">Confirme a Nova Senha</label>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary w-100" type="submit">Redefinir Senha</button>
            </div>

            @include('auth.partials.copy')
        </form>
    </div>
@endsection
