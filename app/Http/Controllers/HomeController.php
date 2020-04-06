<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::take(8)->inRandomOrder()->where([
            'ativo' => 'S'
            ])->get();

        return view('home.index', compact('registros'));
    }

    public function produto($id = null)
    {
        if( !empty($id) ) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
                ])->first();

            if( !empty($registro) ) {
                return view('home.produto', compact('registro'));
            }
        }
        return redirect()->route('index');
    }
}