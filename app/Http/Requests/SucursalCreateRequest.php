<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SucursalCreateRequest extends Request
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
                
        'ubicacion' => 'required',
        'direccion'  => 'required',
    	'telefono'  => 'numeric|required|min:11',
        'descripcion'  => 'required',
        'empresa' => 'required|exists:Empresa,id',
            
        ];
    }
    
     public function messages(){
        
        return [
        'empresa.required' => 'La empresa es requerida',
            ];
    }
}
