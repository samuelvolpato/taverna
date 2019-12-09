<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function create()
    {
        return view('produtos.criar');
    }

    public function store(ProductRequest $request)
    {
        // $request->validate([
        //     'nome' => 'required|max:50',
        //     'codigo' => 'required|numeric',
        //     'fabricante' => 'required|max:50',
        //     'preco' => 'required|numeric',
        //     'descricao' => 'required|max:500',
        //     'detalhes' => 'required|max:500',
        //     'categoria' => 'required|max:100',
        //     'img_path' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
        //     'ativo' => 'required'
        // ]);
        $request->all();
        
        $arquivo = $request->file('img_path');

        if (empty($arquivo)) {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        
        $product = Product::create([
            'nome' => $request->input('nome'),
            'codigo' => $request->input('codigo'),
            'fabricante' => $request->input('fabricante'),
            'preco' => $request->input('preco'),
            'descricao' => $request->input('descricao'),
            'detalhes' => $request->input('detalhes'),
            'categoria' => $request->input('categoria'),
            'img_path' => $caminhoRelativo,
            'ativo' => $request->input('ativo')
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
        return view ('produtos.criar')->with('retorno', $mensagem);
    }

    public function edit($id){

      $product = Product::find($id);
      return view('/produtos/update')->with('product',$product);

    }
    public function update(Request $request,$id){
        $product = Product::find($id);
        $request->all();

        $imagem = $request->file('img_path');

        if (empty($imagem)) {
            $caminhoRelativo = $product->img_pauth;
        } else {
            $imagem->storePublicly('img');
            $caminhoAbsoluto = public_path()."/storage/img";
            $nomeimagem = $imagem->getClientOriginalName();
            $caminhoRelativo = "storage/img/$nomeimagem";  
            $imagem->move($caminhoAbsoluto, $nomeimagem);
        }

        // $product = Product::create([
        //     'nome' => $request->input('nome'),
        //     'codigo' => $request->input('codigo'),
        //     'fabricante' => $request->input('fabricante'),
        //     'preco' => $request->input('preco'),
        //     'descricao' => $request->input('descricao'),
        //     'detalhes' => $request->input('detalhes'),
        //     'categoria' => $request->input('categoria'),
        //     'img_path' => $caminhoRelativo
        // ]);

        $product->nome = $request->input('nome');
        $product->codigo = $request->input('codigo');      
        $product->fabricante = $request->input('fabricante');
        $product->preco = $request->input('preco');
        $product->descricao = $request->input('descricao');
        $product->detalhes = $request->input('detalhes');
        $product->categoria = $request->input('categoria');
        $product->img_path = $caminhoRelativo;

        $product->save();
        // $product = Product::create($request->all());
        $mensagem = "Update de " . $request->input('nome')." executado com sucesso!";
        return view ('produtos.criar')->with('retorno', $mensagem);
    }    
    public function action(){

        $products = Product::all();
        return view ('colecionaveis-teste')->with('products',$products);
    }
    public function info(){

        $products = Product::all();
        return view ('informatica-teste')->with('products',$products);
    }
    public function moda(){
        $products = Product::all();
        return view('moda-teste')->with('products', $products);
    }
    public function livro(){
        $products = Product::all();
        return view('livros-teste')->with('products', $products);
    }
    public function games(){
        $products = Product::all();
        return view('games-teste')->with('products', $products);
    }
    public function produto($id){
        $products = Product::find($id);
        return view('pagina_produto')->with('product', $products);
    }
}

