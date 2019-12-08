@extends('layouts.app')
@section('pagina_titulo', 'Carrinho')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="text-white col-12">Produtos no Carrinho</h3>
        <h5 class="col-lg-6 col-sm-2 col-md-6 text-white">Pedido: {{ $order->id }}</h5>
        <h5 class="col-lg-6 col-sm-2 col-md-6 text-white">Criado em {{ $order->created_at->format('d/m/Y H:i')}}:</h5>
        
        <table class='table table-dark col-12'>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Qtd</th>
                    <th scope="col">Produtos</th>
                    <th scope="col">Valor Unit.</th>
                    <th scope="col">Desconto(s)</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                        $total_order = 0;
                    @endphp
                    @foreach($order->order_products as $order_product)
                    <td>
                        <img width="100" height="100" src="{{ $order_product->product->img_path }}">
                    </td>
                    <td>
                        <div>
                            <a href=""><i class="fas fa-minus-circle"></i></a>
                            <span>quantidade de produto</span>
                            <a href=""><i class="fas fa-plus-circle"></i></a>
                        </div>
                        <a href="" class="efeitoLink" data-toggle="tooltip" data-placement="right" title="Retirar produto do carrinho?">Retirar produto</a>
                    </td>
                    <td>nome do produto</td>
                    <td>R$: valor unitário</td>
                    <td>R$: valor desconto</td>
                    @php
                        // $total_product = $order_product->valores - $order_products->descontos;
                        // $total_order += $total_product;
                    @endphp
                    <td>R$: total</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                <strong class="btn-lg text-white ">Total do pedido:</strong>
                <span class="text-white btn-lg ">R$: TOTAL DO PEDIDO</span>

            </div>
        </div>
       
        <a class="btn btnPadrao" id="cadastrar" href="#" title="Voltar para a página inicial">Continuar Comprando</a>

    {{-- @forelse($orders as $order)
    @empty
        <h5 class="text-white efeitoLink">O carrinho está vázio!</h5>
    @endforelse --}}

    
    </div>
</div>
@endsection