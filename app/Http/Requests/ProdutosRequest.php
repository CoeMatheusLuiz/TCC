<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|unique:produtos',
            'descricao' => 'required',
            'tipo' => 'required',
            'preco' => 'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo nome tem que ser preenchido',
            'nome.unique' => 'Já existe um produto com este nome.', 
            'descricao.required' => 'O campo descricao tem que ser preenchido',
            'tipo.required' => 'O campo tipo tem que ser preenchido',
            'preco.required' => 'O campo preco tem que ser preenchido', 
        ];
    }
}
