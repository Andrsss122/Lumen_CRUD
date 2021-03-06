<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class NuevoAutorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'nombre' => [
                'required'
            ]
        ];
    }

    protected function messages(): array
    {
        return [
            'nombre.required' => 'el nombre del autor es requerido'
        ];
    }





}
