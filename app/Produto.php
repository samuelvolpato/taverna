<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'codigo',
        'fabricante',
        'categoria',
        'valor',
        'descricao',
        'detalhes',
        'imagem',
        'ativo'
    ];
}
