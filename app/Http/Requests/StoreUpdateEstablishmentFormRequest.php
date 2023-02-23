<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEstablishmentFormRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'string',
                'unique:establishments'
            ],
            'phone' => [
                'required'
            ],
            'name' => [
                'required'
            ],
            'address' => [
                'required'
            ],
            'city' => [
                'required'
            ],
            'state' => [
                'required'
            ],
            'password' => [
                'required',
                'min:1',
                'max:15'
            ],
            'confirm_password' => [
                'required',
                'min:1',
                'max:15',
                'same:password'
            ],
            'grid-check' => [
                'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            'required' => "Este campo é obrigatório.",
            'email' => "Deve ser um e-mail válido.",
            'unique' => "Este registro já encontra-se cadastrado.",
            'min' => "Campo deve ter o mínimo de :min caracteres.",
            'max' => "Campo deve ter o máximo de :max caracteres.",
            'same' => "Senha confirmada não é igual a senha cadastrada!"
        ];
    }
}
