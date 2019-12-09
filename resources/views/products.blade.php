@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="message alert-success d-none p-2 my-4">
                    Contato excluído com sucesso
                </div>
                <div class="mb-4">
                    <a href="{{ route('cadastro_produto') }}">
                        <button class="btn btn-primary">Novo Produto</button>
                    </a>
                </div>
                <div class="mb-4">
                    <form class="form-inline" action="{{ url('/') }}" method="GET">
                        <input class="form-control col-10" type="text" name="search" id="search" placeholder="Qual item você procura?">
                        <button class="btn btn-outline-primary col-2" type="submit">Pesquisar</button>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header">
                        Lista de Produtos
                    </div>
                    <div class="card-body">
                        @if($products->isEmpty())
                            <section class="row">
                                <div class="col-12">
                                    <h1 class="col-12 text-center">Que pena! Não encontramos o item pesquisado.</h1>
                                </div>
                            </section>
                        @else
                            <div class="table-responsive border-0">
                                <table class="table table-hover" style="margin-bottom: inherit">
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><img src="{{ $product->avatar_image }}" class="rounded-circle" width="35" height="35"></td>
                                                <td>{{ $product->nome }}</a></td>
                                                <td>{{ $product->categoria }}</a></td>
                                                <td class="d-none d-md-table-cell">{{ $contact->preco }}</a></td>
                                                <td class="d-none d-md-table-cell">{{ $contact->codigo }}</a></td>
                                                <td>
                                                    <a href="/contacts/show/{{$product->id}}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/contacts/edit/{{$product->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#modal{{ $product->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <div class="modal fade" id="modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Deseja excluir o item {{ $product->nome }} ?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Item: {{ $product->nome . " " . $product->preco }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    <form action="/contacts/remove/{{ $product->id }}" method="POST">
                                                                        @csrf
                                                                        {{ method_field('DELETE') }}
                                                                        <button id="delete-contact" type="submit" class="btn btn-danger">Excluir</a>
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
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $products->appends(['search' => isset($search) ? $search : ''])->links() }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection