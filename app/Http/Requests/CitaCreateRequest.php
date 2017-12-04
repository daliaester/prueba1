<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CitaCreateRequest extends Request
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
            'fecha' => 'required',
            'especialista' => 'required',
            'especialidad' => 'required',
            'paciente' => 'required|exists:Paciente,id',
          

        ];
    }
    
    public function messages(){
        
        return [
        'paciente.required' => 'El paciente es requerido',
            ];
    }
    
    }

