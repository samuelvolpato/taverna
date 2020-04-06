
@extends('layouts.app')
@section('pagina_titulo', "Minhas compras")

@section('content')

<div class="container text-white">
    <div class="row ">
        <h3 class="col-md-6">Minhas compras: </h3>
        @if(Session::has('mensagem-sucesso'))
            <strong class="bg-success p-4 col-md-6 col text-center">{{ Session::get('mensagem-sucesso') }}</strong>
        @endif
        @if(Session::has('mensagem-falha'))
            <strong class="bg-success p-4 col-md-6 col text-center">{{ Session::get('mensagem-falha') }}</strong>
        @endif
    </div>
  
    <h4 class="mt-4 border-bottom">Compras concluídas</h4>
    @forelse ($compras as $pedido)
    <div class="row p-2 justify-content-end">
        <div class="col-md-3">
            <h5 class="efeitoLink">Pedido: {{ $pedido->id }}</h5>
        </div>
        <div class="col-md-3">
            <h5 class="efeitoLink">Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }}</h5>
        </div>
    </div>
    <form method="POST" action="{{ route('carrinho.cancelar') }}">
        {{ csrf_field() }}
        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
        <table class="table table-hover table-dark table-borderless mt-4">
            <thead class="text-center">
                <tr>
                    <th></th>
                    <th scope="col"></th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total_pedido = 0;
                @endphp
                
                @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                    @php
                        $total_produto = $pedido_produto->valor - $pedido_produto->desconto;
                        $total_pedido += $total_produto;
                    @endphp
                <tr class="text-center">
                    <td>
                        @if($pedido_produto->status == 'PA')
                            <p class="center">
                                <input type="checkbox" id="item-{{ $pedido_produto->id }}" name="id[]" value="{{ $pedido_produto->id }}" />
                                <label for="item-{{ $pedido_produto->id }}">Selecionar</label>
                            </p>
                        @else
                            <strong class="red-text">CANCELADO</strong>
                        @endif
                    </td>
                    <td>
                        <img width="100" height="100" src="{{ asset($pedido_produto->produto->imagem) }}" class="rounded-circle">
                    </td>
                    <td>{{ $pedido_produto->produto->nome }}</td>
                    <td>R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($pedido_produto->desconto, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <strong>Total do pedido</strong>
                    </td>
                    <td>R$ {{ number_format($total_pedido, 2, ',', '.')}}</td>
                </tr>
                <tr class='text-center'>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btnPadrao" title="Cancelar itens selecionados">Cancelar</button></td>
                </tr>
            </tfoot>
        </table>
    </form>
    @empty
    <div class="row text-center">
        <h5 class="center">
            @if ($cancelados->count() > 0)
                Neste momento não há nenhuma compra válida.
            @else
                Você ainda não fez nenhuma compra.
            @endif
        </h5>
    </div>
    @endforelse

    <h4 class="mt-5 border-bottom">Compras Canceladas</h4>
    @forelse ($cancelados as $pedido)
        <div class="col-md-2">
            <h5 class="efeitoLink">Pedido: {{ $pedido->id }}</h5>
        </div>
        <div class="col-md-3">
            <h5 class="efeitoLink">Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }}</h5>
        </div>
        <div class="col-md-3">
            <h5 class="efeitoLink">Cancelado em: {{ $pedido->updated_at->format('d/m/Y H:i') }}</h5>
        </div>
        <table class="table table-hover table-dark table-borderless mt-4">
            <thead class="text-center">
                <tr>
                    <th></th>
                    <th scope="col"></th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total_pedido = 0;
                @endphp
                
                @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                    @php
                        $total_produto = $pedido_produto->valor - $pedido_produto->desconto;
                        $total_pedido += $total_produto;
                    @endphp
                <tr class="text-center">
                    <td>
                        <img width="100" height="100" src="{{ asset($pedido_produto->produto->imagem) }}" class="rounded-circle">
                    </td>
                    <td>{{ $pedido_produto->produto->nome }}</td>
                    <td>R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($pedido_produto->desconto, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <strong>Total do pedido</strong>
                    </td>
                    <td>R$ {{ number_format($total_pedido, 2, ',', '.')}}</td>
                </tr>
            </tfoot>
        </table>
        @empty
            <h5 class="center">Nenhuma compra ainda foi cancelada.</h5>
        @endforelse  
</div>


@endsection