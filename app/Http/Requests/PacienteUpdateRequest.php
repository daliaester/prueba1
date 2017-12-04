<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PacienteUpdateRequest extends Request
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
        
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|max:255',
            'rut' => 'required|min:10',
            'celular' => 'required|min:11',
            'sexo' => 'required',
            'fnacimiento' => 'required',
            'menor' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            
        ];
    }
}
