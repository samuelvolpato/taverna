<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        "nome",
        "codigo",
        "fabricante",
        "categoria",
        "preco",
        "descricao",
        "detalhes",
        "ativo",
        "img_path"
    ];
    public function getAvatarImageAttribute($value) {
        return $this->img_path == null ? asset('img/null.jpg') : asset($this->img_path);
    }
}




