<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // poner siempre en true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            't_nombre'=>['required','unique:mysql_connect_3.tc_thorpaga']
        ];
    }
    public function messages()
    {
        return [
            't_nombre.unique' => 'El titulo ya ha sido registrado'
        ];
    }
}