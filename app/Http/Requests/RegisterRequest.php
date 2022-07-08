<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'names' => [
                'required', 'string', 
                
            ],
            'lastnames' => [
                'required', 'string', 
            ],
            'username' => [
                'required', 'string', 
            ],
            'email' => [
                'required', 'string', 
            ],
            'password' => [
                'required', 'string', 
            ]



        ];
    }
}

//public function messages(): array
//{


//}
