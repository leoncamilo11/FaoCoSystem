<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCorrespondenciasRequest extends FormRequest
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
            'numeroGuia'=>'required',
            'empresaEnvio'=>'required',
            'estado_id'=>'required',
            'fecha_id'=>'required',
            'emisione_id'=>'required',
            'recepcione_id'=>'required',
            'tipoCorrespondencia_id'=>'required'
        ];
    }
}
