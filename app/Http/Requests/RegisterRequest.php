<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|min:3|unique:users,email',
            'password' => 'required|min:3',
            'siape' => 'required|max:50|unique:users,siape',
            'carga_horaria_semanal' => 'required|numeric',
            'funcao' => 'required|max:100',
            'cargo_efetivo' => 'required|max:100',
        ];
    }
}
