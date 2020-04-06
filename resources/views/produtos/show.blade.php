@extends('layouts.app')

@section('pagina_titulo', 'Produtos Cadastrados')

@section('content')
<div class="container">
    @if(!empty($retorno))
        <div class="row justify-content-center">
            <div class="card text-white bg-dark mb-3 col" style="max-width: 18rem;">
                <div class="card-header">Cadastro de Produtos</div>
                <div class="card-body">
                    <h5 class="card-title">Sucesso!</h5>
                <p class="card-text">{{ $retorno }}</p>
                </div>
            </div>
        </div>
    @endif
    
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="message alert-success d-none p-2 my-4">
                    Produto excluído com sucesso    
                </div>
                <div class="mb-4">
                    <a href="{{ route('produtos.criar') }}">
                        <button class="btn btnPadrao">Cadastrar novo produto</button>
                    </a>
                </div>
                <div class="mb-4">
                    <form class="form-inline" action="{{ url('/products/filter-products') }}" method="GET">
                        <input class="form-control col-10 mr-5" type="text" name="search" id="search" placeholder="O que você procura?">
                        <button class="btn btnPadrao col-1" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        Produtos
                    </div>
                    <div class="card-body">
                        @if($produtos->isEmpty())
                            <section class="row">
                                <div class="col-12">
                                    <h1 class="col-12 text-center text-white">Que pena! Não encontramos produtos no banco.</h1>
                                </div>
                            </section>
                        @else
                            <div class="table-responsive border-0">
                                <table class="table table-hover" style="margin-bottom: inherit">
                                    <tbody>
                                        @foreach ($produtos as $produto)
                                            <tr>
                                                <td><img src="{{ asset($produto->imagem) }}" class="rounded-circle" width="35" height="35"></td>
                                                <td class="text-white" title="Nome do produto">{{ $produto->nome }}</a></td>
                                                <td class="text-white" title="Categoria do produto">{{ $produto->categoria }}</a></td>
                                                <td class="d-none d-md-table-cell text-white" title="Código do produto">{{ $produto->codigo }}</a></td>
                                                <td class="d-none d-md-table-cell text-white" title="Preço do produto">{{ $produto->valor }}</a></td>
                                                <td>
                                                <a href="/produto/{{ $produto->id }}">
                                                        <i class="fas fa-external-link-square-alt" title="Acessar produto"></i></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/produtos/update/{{$produto->id}}" title="Editar produto">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#modal{{ $produto->id }}" title="Excluir produto">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <div class="modal fade" id="modal{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Deseja excluir o produto {{ $produto->nome }} ?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Produto: {{ $produto->nome . " " . $produto->categoria }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                     <form action="/produtos/delete/{{ $produto->id}}" method="POST">
                                                                        @csrf
                                                                        {{ method_field('DELETE') }}
                                                                        <button id="delete-product" type="submit" class="btn btn-danger">Excluir</a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <div class="d-flex justify-content-center mt-4">
                                    {{ $contacts->appends(['search' => isset($search) ? $search : ''])->links() }}
                                </div> --}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
