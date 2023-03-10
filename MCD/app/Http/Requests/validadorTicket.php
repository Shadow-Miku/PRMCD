<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorTicket extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'autor'=>'required',
            'departamento'=>'required',
            'clasificacion'=>'required',
            'comentarios_cliente'=>'required',
            'encargado'=>'required',
            'comentarios_al_cliente'=>'required',
            'observaciones'=>'required'
        ];
    }
}
