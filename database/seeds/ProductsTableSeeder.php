<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nome' => 'Minato',
            'codigo' => '00001',
            'fabricante' => 'otakus',
            'preco' => '100',
            'descricao' => 'boneco minato colecionavel',
            'detalhes' => '30 cm, durepox',
            'img_path' => 'public/img/minato.jpg',
            'categoria' => 'colecionaveis'
        ]);

        Product::create([
            'nome' => 'Naruto',
            'codigo' => '00002',
            'fabricante' => 'otakus',
            'preco' => '99,99',
            'descricao' => 'boneco naruto colecionavel',
            'detalhes' => '29 cm, durepox',
            'img_path' => 'public/img/naruto.jpg',
            'categoria' => 'colecionaveis'
        ]);

        Product::create([
            'nome' => 'Sasuke',
            'codigo' => '00001',
            'fabricante' => 'otakus',
            'preco' => '110',
            'descricao' => 'boneco sasuke colecionavel',
            'detalhes' => '27 cm, durepox',
            'img_path' => 'public/img/sasuke.jpg',
            'categoria' => 'colecionaveis'
        ]);

    }
}
