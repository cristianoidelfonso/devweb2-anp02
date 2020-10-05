<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'nome' => 'bail|required|min:5|max:128|unique:cursos',
            'carga_horaria' => 'bail|required|numeric',
            'professor' => 'bail|required|min:2',
            'preco' => 'required|numeric',
        ];
    }
}
