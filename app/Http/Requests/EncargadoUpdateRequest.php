<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EncargadoUpdateRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
             'rut' => 'required|min:10',
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'fnacimiento' => 'required',
            'email' => 'email|max:255',
            'celular' => 'required|min:11',
        ];
    }
}
