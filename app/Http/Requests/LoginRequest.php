<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }
    
    public function getCredentials()
    {
        return [
            'email' => $this->get('email'),
            'password' => $this->get('password')
        ];
    }
    
}
