<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Product;
use App\OrderProduct;
use App\CupomDesconto;

class CartController extends Controller
{
    function __construct()
    {
        // obriga estar logado;
        $this->middleware('auth');
    }
   
    public function index()
    {

        $order = Order::where([
            'status'  => 'RE',
            'user_id' => Auth::id()
            ])->get();

        return view('cart.index')->with('order',$order);
    }

    // public function adicionar()
    // {

    //     $this->middleware('VerifyCsrfToken');

    //     $req = Request();
    //     $idProduct = $req->input('id');

    //     $product = Product::find($idProduct);
    //     if( empty($product->id) ) {
    //         $req->session()->flash('mensagem-falha', 'Produto não encontrado em nossa loja!');
    //         return redirect()->route('cart.index');
    //     }

    //     $idUser = Auth::id();

    //     $idOrder = Order::consultaId([
    //         'user_id' => $idUser,
    //         'status'  => 'RE' // Reservada
    //         ]);

    //     if( empty($idOrder) ) {
    //         $order_new = Order::create([
    //             'user_id' => $idUser,
    //             'status'  => 'RE'
    //             ]);

    //         $idOrder = $order_new->id;

    //     }

    //     OrderProduct::create([
    //         'order_id'  => $idOrder,
    //         'product_id' => $idProduct,
    //         'valor'      => $product->preco,
    //         'status'     => 'RE'
    //         ]);

    //     $req->session()->flash('mensagem-sucesso', 'Produto adicionado ao carrinho com sucesso!');

    //     return redirect()->route('cart.index');

    // }

    // public function remover()
    // {

    //     $this->middleware('VerifyCsrfToken');

    //     $req = Request();
    //     $idOrder = $req->input('order_id');
    //     $idProduct = $req->input('product_id');
    //     $remove_apenas_item = (boolean)$req->input('item');
    //     $idUser          = Auth::id();

    //     $idOrder = Order::consultaId([
    //         'id'      => $idOrder,
    //         'user_id' => $idUser,
    //         'status'  => 'RE' // Reservada
    //         ]);

    //     if( empty($idOrder) ) {
    //         $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
    //         return redirect()->route('cart.index');
    //     }

    //     $where_product = [
    //         'order_id'  => $idOrder,
    //         'product_id' => $idProduct
    //     ];

    //     $product = OrderProduct::where($where_product)->orderBy('id', 'desc')->first();
    //     if( empty($product->id) ) {
    //         $req->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
    //         return redirect()->route('cart.index');
    //     }

    //     if( $remove_apenas_item ) {
    //         $where_product['id'] = $product->id;
    //     }
    //     OrderProduct::where($where_product)->delete();

    //     $check_order = OrderProduct::where([
    //         'order_id' => $product->order_id
    //         ])->exists();

    //     if( !$check_order ) {
    //         Order::where([
    //             'id' => $product->order_id
    //             ])->delete();
    //     }

    //     $req->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');

    //     return redirect()->route('cart.index');
    // }

    // public function concluir()
    // {
    //     $this->middleware('VerifyCsrfToken');

    //     $req = Request();
    //     $idOrder  = $req->input('order_id');
    //     $idUser = Auth::id();

    //     $check_order = Order::where([
    //         'id'      => $idOrder,
    //         'user_id' => $idUser,
    //         'status'  => 'RE' // Reservada
    //         ])->exists();

    //     if( !$check_order ) {
    //         $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
    //         return redirect()->route('cart.index');
    //     }

    //     $check_products = OrderProduct::where([
    //         'order_id' => $idOrder
    //         ])->exists();
    //     if(!$check_products) {
    //         $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
    //         return redirect()->route('cart.index');
    //     }

    //     OrderProduct::where([
    //         'order_id' => $idOrder
    //         ])->update([
    //             'status' => 'PA'
    //         ]);
    //     Order::where([
    //             'id' => $idOrder
    //         ])->update([
    //             'status' => 'PA'
    //         ]);

    //     $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');

    //     return redirect()->route('cart.compras');
    // }

    // public function compras()
    // {

    //     $shoppings = Order::where([
    //         'status'  => 'PA',
    //         'user_id' => Auth::id()
    //         ])->orderBy('created_at', 'desc')->get();

    //     $canceleds = Order::where([
    //         'status'  => 'CA',
    //         'user_id' => Auth::id()
    //         ])->orderBy('updated_at', 'desc')->get();

    //     return view('cart.shoppings', compact('shoppings', 'canceleds'));

    // }

    // public function cancelar()
    // {
    //     $this->middleware('VerifyCsrfToken');

    //     $req = Request();
    //     $idOrder       = $req->input('order_id');
    //     $idsOrder_prod = $req->input('id');
    //     $idUser      = Auth::id();

    //     if( empty($idsOrder_prod) ) {
    //         $req->session()->flash('mensagem-falha', 'Nenhum item selecionado para cancelamento!');
    //         return redirect()->route('cart.shoppings');
    //     }

    //     $check_order = Order::where([
    //         'id'      => $idOrder,
    //         'user_id' => $idUser,
    //         'status'  => 'PA' // Pago
    //         ])->exists();

    //     if( !$check_order ) {
    //         $req->session()->flash('mensagem-falha', 'Pedido não encontrado para cancelamento!');
    //         return redirect()->route('cart.shoppings');
    //     }

    //     $check_products = OrderProduct::where([
    //             'order_id' => $idOrder,
    //             'status'    => 'PA'
    //         ])->whereIn('id', $idsOrder_prod)->exists();

    //     if( !$check_products ) {
    //         $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
    //         return redirect()->route('cart.shoppings');
    //     }

    //     OrderProduct::where([
    //             'order_id' => $idOrder,
    //             'status'    => 'PA'
    //         ])->whereIn('id', $idsOrder_prod)->update([
    //             'status' => 'CA'
    //         ]);

    //     $check_order_cancel = OrderProduct::where([
    //             'order_id' => $idOrder,
    //             'status'    => 'PA'
    //         ])->exists();

    //     if( !$check_order_cancel ) {
    //         Order::where([
    //             'id' => $idOrder
    //         ])->update([
    //             'status' => 'CA'
    //         ]);

    //         $req->session()->flash('mensagem-sucesso', 'Compra cancelada com sucesso!');

    //     } else {
    //         $req->session()->flash('mensagem-sucesso', 'Item(ns) da compra cancelado(s) com sucesso!');
    //     }

    //     return redirect()->route('cart.shoppings');
    // }

    // public function desconto()
    // {

    //     $this->middleware('VerifyCsrfToken');

    //     $req = Request();
    //     $idOrder  = $req->input('order_id');
    //     $cupom     = $req->input('cupom');
    //     $idUser = Auth::id();

    //     if( empty($cupom) ) {
    //         $req->session()->flash('mensagem-falha', 'Cupom inválido!');
    //         return redirect()->route('cart.index');
    //     }

    //     $cupom = CupomDesconto::where([
    //         'localizador' => $cupom,
    //         'ativo'       => 'S'
    //         ])->where('dthr_validade', '>', date('Y-m-d H:i:s'))->first();

    //     if( empty($cupom->id) ) {
    //         $req->session()->flash('mensagem-falha', 'Cupom de desconto não encontrado!');
    //         return redirect()->route('cart.index');
    //     }

    //     $check_order = Order::where([
    //         'id'      => $idOrder,
    //         'user_id' => $idUser,
    //         'status'  => 'RE' // Reservado
    //         ])->exists();

    //     if(!$check_order) {
    //         $req->session()->flash('mensagem-falha', 'Pedido não encontrado para validação!');
    //         return redirect()->route('cart.index');
    //     }

    //     $order_products = OrderProduct::where([
    //             'order_id' => $idOrder,
    //             'status'    => 'RE'
    //         ])->get();

    //     if( empty($order_products) ) {
    //         $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
    //         return redirect()->route('cart.index');
    //     }

    //     $aplicou_desconto = false;
    //     foreach ($order_products as $order_product) {

    //         switch ($cupom->modo_desconto) {
    //             case 'porc':
    //                 $valor_desconto = ( $order_product->valor * $cupom->desconto ) / 100;
    //                 break;

    //             default:
    //                 $valor_desconto = $cupom->desconto;
    //                 break;
    //         }

    //         $valor_desconto = ($valor_desconto > $order_product->valor) ? $order_product->valor : number_format($valor_desconto, 2);

    //         switch ($cupom->modo_limite) {
    //             case 'qtd':
    //                 $amount_order = OrderProduct::whereIn('status', ['PA', 'RE'])->where([
    //                         'cupom_desconto_id' => $cupom->id
    //                     ])->count();

    //                 if( $amount_order >= $cupom->limite ) {
    //                     continue;
    //                 }
    //                 break;

    //             default:
    //                 $valor_ckc_descontos = OrderProduct::whereIn('status', ['PA', 'RE'])->where([
    //                         'cupom_desconto_id' => $cupom->id
    //                     ])->sum('desconto');

    //                 if( ($valor_ckc_descontos+$valor_desconto) > $cupom->limite ) {
    //                     continue;
    //                 }
    //                 break;
    //         }

    //         $order_product->cupom_desconto_id = $cupom->id;
    //         $order_product->desconto          = $valor_desconto;
    //         $order_product->update();

    //         $aplicou_desconto = true;

    //     }

    //     if( $aplicou_desconto ) {
    //         $req->session()->flash('mensagem-sucesso', 'Cupom aplicado com sucesso!');
    //     } else {
    //         $req->session()->flash('mensagem-falha', 'Cupom esgotado!');
    //     }
    //     return redirect()->route('cart.index');

    // }
}
