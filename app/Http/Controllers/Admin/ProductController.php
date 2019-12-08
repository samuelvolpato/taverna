<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function adicionar()
    {
        return view('admin.product.add');
    }

    public function editar($id)
    {
        $registro = Product::find($id);
        if( empty($registro->id) ) {
            return redirect()->route('admin.products');
        }
        return view('admin.product.edit', compact('registro'));
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        Product::create($dados);

        $req->session()->flash('admin-mensagem-sucesso', 'Produto cadastrado com sucesso!');

        return redirect()->route('admin.products');
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Product::find($id)->update($dados);

        $req->session()->flash('admin-mensagem-sucesso', 'Produto atualizado com sucesso!');

        return redirect()->route('admin.products');
    }

    public function deletar($id)
    {

        Product::find($id)->delete();

        $req->session()->flash('admin-mensagem-sucesso', 'Produto deletado com sucesso!');

        return redirect()->route('admin.products');
    }
}
