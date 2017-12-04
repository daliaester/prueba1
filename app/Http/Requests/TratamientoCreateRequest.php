<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TratamientoCreateRequest extends Request
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
        'descripcion' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'status' => 'required',
        'paciente' => 'required|exists:Paciente,id'
            
        ];
    }
    
     public function messages(){
        
        return [
        'paciente.required' => 'el paciente es requerido',
            ];
    }
}
