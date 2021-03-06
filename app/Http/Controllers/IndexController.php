<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(4)->get();

        return view('index')->with('products', $products);
    }
}
