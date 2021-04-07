<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuariosRequest extends FormRequest
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
            //
            'name'=>'required',
            'apellido'=>'required',
            'tipoDocumento_id'=>'required',
            'documento'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role_id'=>'required',
            'telefono'=>'required',
            'entidade_id'=>'required',
            'area_id'=>'required'
        ];
    }
}
