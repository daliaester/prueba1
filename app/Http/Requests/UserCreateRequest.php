<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name' => 'required',
            'apellido' => 'required',
            'rut' => 'required',
            'fnacimiento' => 'required',
            'ciudad' => 'required',
           
            'celular' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'min:8|same:password',
        ];
    }
}
