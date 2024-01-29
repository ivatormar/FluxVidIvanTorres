<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'min:5', 'max:20','unique:users'],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'min:10', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],


        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El campo de nombre de usuario es obligatorio.',
            'username.string' => 'El nombre de usuario debe ser una cadena de texto.',
            'username.min' => 'El nombre de usuario debe tener al menos :min caracteres.',
            'username.max' => 'El nombre de usuario no puede tener más de :max caracteres.',
            'username.unique' => 'El nombre de usuario ya existe.',


            'name.required' => 'El campo de nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.min' => 'El correo electrónico debe tener al menos :min caracteres.',
            'email.max' => 'El correo electrónico no puede tener más de :max caracteres.',

            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
            'password.*' => 'La contraseña debe cumplir con los requisitos de seguridad establecidos.',

            'password_confirmation.required' => 'La confirmación de contraseña es obligatoria.',
        ];
    }
}
