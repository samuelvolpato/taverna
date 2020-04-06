<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Str;


class ProdutoController extends Controller
{
    public function create()
    {
        return view('produtos.criar');
    }

    public function store(ProdutoRequest $request)
    {
        $request->all();
        
        $arquivo = $request->file('imagem');

        if (empty($arquivo)) {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        
        $produto = Produto::create([
            'nome' => $request->input('nome'),
            'codigo' => $request->input('codigo'),
            'fabricante' => $request->input('fabricante'),
            'valor' => $request->input('valor'),
            'descricao' => $request->input('descricao'),
            'detalhes' => $request->input('detalhes'),
            'categoria' => $request->input('categoria'),
            'imagem' => $caminhoRelativo,
            'ativo' => $request->input('ativo')
        ]);


        
        $mensagem = "Cadastro de " . $request->input('nome')." criado com sucesso!";
        return view ('produtos.criar')->with('retorno', $mensagem);
    }

    public function index($id)
    {
        $produto = Produto::find($id);
        return view('home.produto')->with('produto', $produto);
    }

    public function show()
    {
        $produtos = Produto::all();
        return view ('produtos.show')->with('produtos',$produtos);
    }


    public function delete($id)
    {
        $produtos = Produto::find($id);
        $produtos->delete();
        $mensagem = "Produto excluído com sucesso!";
        return view ('produtos.criar')->with('retorno', $mensagem);
    }

    public function edit($id){

      $produto = Produto::find($id);
      return view('/produtos/update')->with('produto',$produto);

    }
    public function update(Request $request, $id){
        $produto = Produto::find($id);

        $request->all();

        $imagem = $request->file('imagem');

        if (empty($imagem)) {
            $caminhoRelativo = $produto->imagem;
        } else {
            $imagem->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeimagem = $imagem->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeimagem";  
            $imagem->move($caminhoAbsoluto, $nomeimagem);
        }
        
        $produto->nome = $request->input('nome');
        $produto->codigo = $request->input('codigo');
        $produto->fabricante = $request->input('fabricante');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        $produto->detalhes = $request->input('detalhes');
        $produto->categoria = $request->input('categoria');
        $produto->imagem = $caminhoRelativo;

        $produto->save();

        $mensagem = "Update de " . $request->input('nome')." executado com sucesso!";
        return view ('/produtos/criar')->with('retorno', $mensagem);
    }
    
    public function search(Request $request){
        $search = $request->input('search');

        $contacts = Produto::
              where('nome', 'like', '%'.$search.'%')
              ->orWhere('categoria', 'like', '%'.$search.'%')
              ->paginate(5);

        return view('produtos.index')->with(['produtos' => $produtos, 'search' => $search]);
    }
    public function action(){

        $produtos = Produto::all();
        return view ('/produtos/colecionaveis')->with('produtos',$produtos);
    }
    public function info(){

        $produtos = Produto::all();
        return view ('/produtos/informatica')->with('produtos',$produtos);
    }
    public function moda(){
        $produtos = Produto::all();
        return view('/produtos/moda')->with('produtos', $produtos);
    }
    public function livro(){
        $produtos = Produto::all();
        return view('/produtos/livros')->with('produtos', $produtos);
    }
    public function games(){
        $produtos = Produto::all();
        return view('/produtos/games')->with('produtos', $produtos);
    }
    public function musica(){
        $produtos = Produto::all();
        return view('/produtos/musica')->with('produtos', $produtos);
    }
}

        


