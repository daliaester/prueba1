<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FichaCreateRequest extends Request
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

            'peso'=> 'numeric|required',
            'altura'=> 'numeric|required',
            'alergia' => 'required',
            'enfermedad_patologia'=> 'required',
            'enfermedad_parafuncional'=> 'required',
            'tratamiento_medico'=> 'required',
            'medicamento_actual'=> 'required',
            'terapia'=> 'required',
            'habito_fumador'=> 'required',
            'habito_alcohol'=> 'required',
            'habito_drogas'=> 'required',
            'paciente' => 'required|exists:Paciente,id'
        ];
    }
    
     public function messages(){
        
        return [
        'paciente.required' => 'el paciente es requerido',
            ];
    }
    
}
