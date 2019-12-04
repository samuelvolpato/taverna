<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('produtos.criar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:50',
            'codigo' => 'required|max:10',
            'fabricante' => 'required|max:50',
            'preco' => 'required|max:80',
            'descricao' => 'required|max:100',
            'detalhes' => 'required|max:100',
            'img_path' => 'nullable'
        ]);

        $product = Product::create($request->all());
        $mensagem = "Cadastro de " . $request->input('nome')." criado com sucesso!";
        return view ('produtos.criar')->with('retorno', $mensagem);
    }
}

