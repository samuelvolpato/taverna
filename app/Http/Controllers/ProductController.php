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
            $caminhoAbsoluto = public_path()."/storage/app/img";
            $nomeArquivo = $request->file('img_path')->getClientOriginalName();
            $caminhoRelativo = "storage/app/img/$nomeArquivo";
            $imagem->move($caminhoAbsoluto, $nomeArquivo);
        }

        $product = Product::create([
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

    public function show(){

        $products = Product::all();
        return view ('produtos.show')->with('products',$products);
    }

    public function delete($id){

        $products = Product::find($id);
        $products->delete();
        $mensagem = "Produto excluído com sucesso!";
        return view ('/produtos/criar')->with('retorno', $mensagem);
    }
}
