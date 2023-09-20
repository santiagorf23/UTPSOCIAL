<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'username' => 'required|unique:users,username,'.auth()->user()->id,
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Este campo es obligatorio.',
            'name.max' => 'Supero la máxima cantidad de caracteres.',
            'username.required' => 'Este campo es obligatorio.',
            'username.unique' => 'El nombre de usuario ya esta en uso.',
        ];
    }
}
