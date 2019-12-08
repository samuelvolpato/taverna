<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'status'
    ];

    public function pedido_produtos()
    {
        return $this->hasMany('App\OrderProduct')
            ->select( \DB::raw('product_id, sum(desconto) as descontos, sum(valor) as valores, count(1) as qtd') )
            ->groupBy('product_id')
            ->orderBy('product_id', 'desc');
    }

    public function pedido_produtos_itens()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public static function consultaId($where)
    {
        $order = self::where($where)->first(['id']);
        return !empty($order->id) ? $order->id : null;
    }
}
