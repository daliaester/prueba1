<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsumoCreateRequest extends Request
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
            
    'nombre'=> 'required',
    'fabricante'=> 'required',
    'caducidad'=> 'required',
    'descripcion'=> 'required',
    'cantidad'=> 'numeric|required|min:1',
    'tipo'=> 'required',
    'fecha_ingreso',
    'fecha_reposicion',
    'stock' => 'required|exists:Stock,id',
   
        ];
    }
    
    public function messages(){
        
        return [
        'stock.required' => 'Se requiere un inventario',
            ];
    }
    
}
