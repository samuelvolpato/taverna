<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'codigo' => 'required|numeric',
            'fabricante' => 'required|max:50',
            'valor' => 'required|numeric',
            'descricao' => 'required|min:10',
            'detalhes' => 'required|min:10',
            'categoria' => 'required|max:100',
            'imagem' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
            'ativo' => 'required'
        ];
    }
}
