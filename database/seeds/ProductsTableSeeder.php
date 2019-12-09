<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nome' => 'FIFA 20 - Xbox One',
            'codigo' => '8000',
            'fabricante' => 'Eletronics Arts (EA)',
            'categoria' => 'games',
            'preco' => '199',
            'descricao' => 'FIFA 20 inova no jogo inteiro.',
            'detalhes' => 'Dimensões do produto: 1,5 x 13,5 x 17 cm ; 4,54 g',
            'ativo' => 'S',
            'img_path' => 'img/seed_games.jpg'
        ]);
        DB::table('products')->insert([
            'nome' => 'Action Figure Dark Souls',
            'codigo' => '8010',
            'fabricante' => 'Bandai Banpresto',
            'categoria' => 'colecionaveis',
            'preco' => '258',
            'descricao' => 'Figura plástica.',
            'detalhes' => 'Material: pvc, tamanho: 20 cm',
            'ativo' => 'S',
            'img_path' => 'img/seed_colecionaveis.jpg'
        ]);
        DB::table('products')->insert([
            'nome' => 'HD SSD Kingston',
            'codigo' => '8020',
            'fabricante' => 'Kingston',
            'categoria' => 'informatica',
            'preco' => '305',
            'descricao' => 'Desempenho até 10x mais rápido que um HD convencional, uma vez que não possui disco',
            'detalhes' => 'Tamanho do HD: 480 GB',
            'ativo' => 'S',
            'img_path' => 'img/seed_informatica.jpg'
        ]);
        DB::table('products')->insert([
            'nome' => 'Construindo Aplicação Web',
            'codigo' => '8030',
            'fabricante' => 'William Alves',
            'categoria' => 'livros',
            'preco' => '90',
            'descricao' => 'Este livro de banco de dados MySQL e a linguagem PHP.',
            'detalhes' => 'Capa comum 520 páginas',
            'ativo' => 'S',
            'img_path' => 'img/seed_livro.jpg'
        ]);
        DB::table('products')->insert([
            'nome' => 'Moletom Criativa Urbana',
            'codigo' => '8040',
            'fabricante' => 'Nerd Geek',
            'categoria' => 'moda',
            'preco' => '97',
            'descricao' => 'Fabricado em material confortável ao vestir e macio ao toque.',
            'detalhes' => 'Moletom canguru quentinho, macio e confortável.',
            'ativo' => 'S',
            'img_path' => 'img/seed_moda.jpg'
        ]);
        DB::table('products')->insert([
            'nome' => 'Vitrola com USB e Bluetooth',
            'codigo' => '8050',
            'fabricante' => 'Raveo',
            'categoria' => 'musica',
            'preco' => '385',
            'descricao' => 'O toca-discos da vitrola.',
            'detalhes' => 'Vitrola Raveo Sonetto, Adaptador de Tensão 5 Volts.',
            'ativo' => 'S',
            'img_path' => 'img/seed_musica.jpg'
        ]);
    }
}