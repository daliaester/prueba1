<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EncargadoCreateRequest extends Request
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
           
            'rut' => 'min:10|unique:encargado',
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'fnacimiento' => 'required',
            'email' => 'email|max:255|unique:encargado',
            'celular' => 'required|min:11',
            'paciente' => 'required|exists:Paciente,id',
        ];
    }
    
    public function messages(){
        
        return [
        'paciente.required' => 'el paciente es requerido',
            ];
    }
    
}
