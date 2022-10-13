<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCliente extends FormRequest
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
                'nombre' => 'required',
                'edad' => 'required|numeric|between: 20,50',
                'cp' => 'required|min:4|between: 1000,3000|numeric',
                'sexo'=> 'required',
        ];
    }

}
