
@extends('layouts.app')
@section('pagina_produto', 'Carrinho')

@section('content')
<div class="container text-white">
    <div class="row ">
        <h3 class="col-md-6">Minhas compras: </h3>
        @if(Session::has('mensagem-sucesso'))
            <strong class="bg-success p-4 col-md-6 col text-center">{{ Session::get('mensagem-sucesso') }}</strong>
        @endif
        @if(Session::has('mensagem-falha'))
            <strong class="bg-danger p-4 col-md-6 col text-center">{{ Session::get('mensagem-falha') }}</strong>
        @endif
    </div>
 
@forelse ($pedidos as $pedido)
<div class="container">
    <div class="row p-2 justify-content-end border-bottom">
        <div class="col-md-3">
            <h5>Pedido: {{ $pedido->id }}</h5>
        </div>
        <div class="col-md-3">
            <h5>Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }}</h5>
        </div>
    </div>
</div>
    <table class="table table-hover table-dark mt-4">
        <thead class="text-center">
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Produto</th>
                <th scope="col">Valor Unit.</th>
                <th scope="col">Desconto(s)</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
        @php
            $total_pedido = 0;
        @endphp
        @foreach ($pedido->pedido_produtos as $pedido_produto)
            <tr class="text-center">
                <td>
                    <img width="100" height="100" src="{{ asset($pedido_produto->produto->imagem) }}" alt="" class="rounded-circle">
                </td>
                <td>
                    <div>
                        <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )" title="Remover item do pedido"><i class="fas fa-minus-circle"></i></a>
                        <span>{{ $pedido_produto->qtd }}</span>
                        <a href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})" title="Adicionar item ao pedido"><i class="fas fa-plus-circle"></i></a>
                        <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)" title="Remover produto do pedido">Adicionar/Retirar</a>
                    </div>
                </td>
                <td>{{ $pedido_produto->produto->nome }}</td>
                <td>R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</td>
                <td>R$ {{ number_format($pedido_produto->descontos, 2, ',', '.') }}</td>
            @php
                $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
                $total_pedido += $total_produto;
            @endphp
                <td>R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
    <div class="row justify-content-md-end border-bottom">
        <strong class="mr-2">Total do pedido:</strong>
        <span class="">R$ {{ number_format($total_pedido, 2, ',', '.') }}</span>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-md-end mt-2">
        <form method="POST" action="{{ route('carrinho.desconto') }}">
            {{ csrf_field() }}
            <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
            <strong class="mr-2">Cupom de desconto: </strong>
            <input class="mr-2" type="text" name="cupom">
            <button class="btn btnPadrao">Validar</button>
        </form>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-md-end mt-2">
        <a class="btn btn-lg btnPadrao mr-3" href="{{ route('index') }}">Continuar comprando</a>
        <form method="POST" action="{{ route('carrinho.concluir') }}">
            {{ csrf_field() }}
            <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
            <button type="submit" class="btn btn-lg btnPadrao">
                Concluir compra
            </button>   
        </form>
    </div>
    </div>
    @empty
        <h5 class="text-white">Não há nenhum pedido no carrinho</h5>
    @endforelse
    <form id="form-remover-produto" method="POST" action="{{ route('carrinho.remover') }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="hidden" name="pedido_id">
        <input type="hidden" name="produto_id">
        <input type="hidden" name="item">
    </form>
    <form id="form-adicionar-produto" method="POST" action="{{ route('carrinho.adicionar') }}">
        {{ csrf_field() }}
        <input type="hidden" name="id">
    </form>
</div>
@push('scripts')
    <script type="text/javascript" src="/js/carrinho.js"></script>
@endpush
@endsection
