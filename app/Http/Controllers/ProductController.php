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
            'codigo' => 'required|numeric',
            'fabricante' => 'required|max:50',
            'preco' => 'required|numeric',
            'descricao' => 'required|max:500',
            'detalhes' => 'required|max:500',
            'categoria' => 'required|max:100',
            'img_path' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'
        ]);

        // $nomeCategoria = $request->file('categoria');
        $imagem = $request->file('img_path');
        if (empty($imagem)) {
            $caminhoRelativo = null;
        } else {
            $imagem->storePublicly('img');
            $caminhoAbsoluto = public_path()."/storage/img";
            $nomeArquivo = $imagem->getClientOriginalName();
            $caminhoRelativo = "storage/img/$nomeArquivo";
            $imagem->move($caminhoAbsoluto, $nomeArquivo);
        }

        $contact = Product::create([
            'nome' => $request->input('nome'),
            'codigo' => $request->input('codigo'),
            'fabricante' => $request->input('fabricante'),
            'preco' => $request->input('preco'),
            'descricao' => $request->input('descricao'),
            'detalhes' => $request->input('detalhes'),
            'categoria' => $request->input('categoria'),
            'img_path' => $caminhoRelativo
        ]);

        // $product = Product::create($request->all());
        $mensagem = "Cadastro de " . $request->input('nome')." criado com sucesso!";
        return view ('produtos.criar')->with('retorno', $mensagem);
    }
}

