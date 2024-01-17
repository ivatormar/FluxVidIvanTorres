<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|min:8|max:40|unique:movies,title',
            'year' => 'required|integer|digits:4|gte:1920',
            'plot' => 'required|min:20|max:300',
            'rating' => 'required|numeric|between:0,5',
            'director' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.min' => 'El título debe tener al menos :min caracteres.',
            'title.max' => 'El título no puede tener más de :max caracteres.',
            'title.unique' => 'Ya existe una película con ese título.',

            'year.required' => 'El año es obligatorio.',
            'year.integer' => 'El año debe ser un valor entero.',
            'year.digits' => 'El año debe tener exactamente :digits dígitos.',
            'year.gte' => 'El año debe ser igual o superior a 1920.',

            'plot.required' => 'La trama es obligatoria.',
            'plot.min' => 'La trama debe tener al menos :min caracteres.',
            'plot.max' => 'La trama no puede tener más de :max caracteres.',

            'rating.required' => 'La calificación es obligatoria.',
            'rating.numeric' => 'La calificación debe ser un valor numérico.',
            'rating.between' => 'La calificación debe estar entre 0 y 5 con un solo decimal permitido.',

            'director.numeric' => 'El director es obligatorio.',
        ];
    }
}
