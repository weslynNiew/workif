<?php

namespace App\Http\Controllers;

use App\Mail\EsqueciMinhaSenha;
use App\Models\PasswordResets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }

    public function esqueciSenha()
    {
        return view('auth.esqueci_senha.index');
    }

    public function redefinirSenha($token, $email)
    {
        return view('auth.esqueci_senha.redefinir')
            ->with('token',$token)
            ->with('email',$email);
    }

    public function enviarToken(Request $request)
    {
        $usuario = User::where("email", $request->email)->first();

        (new PasswordResets())->where('email', $request->email)?->delete();

        if (!$usuario) {
            return redirect()->back()
                ->with('response', 'E-mail inválido')
                ->with('class', 'alert alert-danger');
        }

        $token = Str::random(6);

        $passwordReset = new PasswordResets();
        $passwordReset->email = $request->email;
        $passwordReset->token = $token;
        $passwordReset->save();

        Mail::to($request->email)->send(new EsqueciMinhaSenha($token,$request->email));

        return redirect()->back()
            ->with('response', 'E-mail de redefinição de senha enviado com sucesso')
            ->with('class', 'alert alert-success');
    }

    public function alterarSenha(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
            'token' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        $token = PasswordResets::where('email', $user->email)->first()->token;
        if ($request->token == $token) {
            $user->password = $request->password;
            $user->save();
            Auth::login($user);
        }


        return redirect('/');

    }
}
