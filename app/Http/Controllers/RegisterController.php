<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {

        $user = User::create(array_merge($request->validated(), ['role' => 'ROLE_USER']));

        auth()->login($user);

        return redirect('/')->with('success', "Cadastro efetuado com sucesso");
    }


}
