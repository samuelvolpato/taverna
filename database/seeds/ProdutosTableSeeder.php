<?php

use App\Produto;
use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed games
        DB::table('produtos')->insert([
            'nome' => 'FIFA 20 - Xbox One',
            'codigo' => '8000',
            'fabricante' => 'Eletronics Arts (EA)',
            'categoria' => 'games',
            'valor' => '199',
            'descricao' => 'FIFA 20 inova no jogo inteiro.',
            'detalhes' => 'Dimensões do produto',
            'ativo' => 'S',
            'imagem' => 'img/seed_games.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'God of War - PlayStation 4',
            'codigo' => '8001',
            'fabricante' => 'Playstation',
            'categoria' => 'games',
            'valor' => '77.80',
            'descricao' => 'Do Olimpo Para As Florestas, Montanhas E Cavernas Realistas Do Universo Nórdico Pré-Viking',
            'detalhes' => 'Dimensões do produto: 13,5 x 3 x 19 cm ; 200 g',
            'ativo' => 'S',
            'imagem' => 'img/seed_games1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Controle Bluetooth - Android e IOS',
            'codigo' => '8002',
            'fabricante' => 'Ípega PG',
            'categoria' => 'games',
            'valor' => '68.54',
            'descricao' => 'Controle Bluetooth Para Celular Smartphone.',
            'detalhes' => 'Fonte de alimentação: Bateria recarregável',
            'ativo' => 'S',
            'imagem' => 'img/seed_games2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Vídeo Game Portátil',
            'codigo' => '8003',
            'fabricante' => 'SUP',
            'categoria' => 'games',
            'valor' => '56.00',
            'descricao' => '400 Jogos Internos Mini Game Sup Preto.',
            'detalhes' => 'Dimensões do produto: 22 x 14 x 7 cm ; 150 g',
            'ativo' => 'S',
            'imagem' => 'img/seed_games3.jpg'
        ]);
        // seed colecionaveis
        DB::table('produtos')->insert([
            'nome' => 'Action Figure Dark Souls',
            'codigo' => '8010',
            'fabricante' => 'Bandai Banpresto',
            'categoria' => 'colecionaveis',
            'valor' => '258',
            'descricao' => 'Figura plástica.',
            'detalhes' => 'Material: pvc, tamanho: 20 cm',
            'ativo' => 'S',
            'imagem' => 'img/seed_colecionaveis.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Pokemon Ash E Pikachu',
            'codigo' => '8011',
            'fabricante' => 'Tomy',
            'categoria' => 'colecionaveis',
            'valor' => '189.90',
            'descricao' => 'Figura plástica.',
            'detalhes' => 'Dimensões do produto: 16,5 x 5,1 x 22,9 cm ; 113 g',
            'ativo' => 'S',
            'imagem' => 'img/seed_colecionaveis1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Action Figure Brienne Of Tarth',
            'codigo' => '8012',
            'fabricante' => 'Dark Horse',
            'categoria' => 'colecionaveis',
            'valor' => '159.50',
            'descricao' => 'Figura plástica.',
            'detalhes' => 'Material: PVC tamanho: 17 cm base inclusa',
            'ativo' => 'S',
            'imagem' => 'img/seed_colecionaveis2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Action Figure Pacman Ghost',
            'codigo' => '8013',
            'fabricante' => 'Paladone',
            'categoria' => 'colecionaveis',
            'valor' => '283.87',
            'descricao' => 'Figura plástica.',
            'detalhes' => 'Material: PVC tamanho: 20 cm',
            'ativo' => 'S',
            'imagem' => 'img/seed_colecionaveis3.jpg'
        ]);
        // seed informatica
        DB::table('produtos')->insert([
            'nome' => 'HD SSD Kingston',
            'codigo' => '8020',
            'fabricante' => 'Kingston',
            'categoria' => 'informatica',
            'valor' => '305',
            'descricao' => 'Desempenho até 10x mais rápido que um HD convencional, uma vez que não possui disco',
            'detalhes' => 'Tamanho do HD: 480 GB',
            'ativo' => 'S',
            'imagem' => 'img/seed_informatica.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Razer Mouse Mamba',
            'codigo' => '8021',
            'fabricante' => 'Razer',
            'categoria' => 'informatica',
            'valor' => '766.65',
            'descricao' => 'Até 450 polegadas por segundo/50 G de aceleração.',
            'detalhes' => 'Cor: Preto, Altura do produto: 12.6 centímetros',
            'ativo' => 'S',
            'imagem' => 'img/seed_informatica1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Gabinete H710I Matte Black',
            'codigo' => '8022',
            'fabricante' => 'Nzxt',
            'categoria' => 'informatica',
            'valor' => '1344.15',
            'descricao' => 'Gabinete para Computador',
            'detalhes' => 'Dimensões do produto: 49,4 x 23 x 51,6 cm ; 13,6 g',
            'ativo' => 'S',
            'imagem' => 'img/seed_informatica2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Cadeira Dxracer Racing',
            'codigo' => '8023',
            'fabricante' => 'DX Racer',
            'categoria' => 'informatica',
            'valor' => '1899.00',
            'descricao' => 'Garante durabilidade e ergonomia.',
            'detalhes' => 'Suporta até 120kg',
            'ativo' => 'S',
            'imagem' => 'img/seed_informatica3.jpg'
        ]);
        // seed livros
        DB::table('produtos')->insert([
            'nome' => 'Construindo Aplicação Web',
            'codigo' => '8030',
            'fabricante' => 'William Alves',
            'categoria' => 'livros',
            'valor' => '90',
            'descricao' => 'Este livro de banco de dados MySQL e a linguagem PHP.',
            'detalhes' => 'Capa comum 520 páginas',
            'ativo' => 'S',
            'imagem' => 'img/seed_livro.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Javascript e Jquery para Web',
            'codigo' => '8031',
            'fabricante' => 'Jon Duckett',
            'categoria' => 'livros',
            'valor' => '160.00',
            'descricao' => 'Bem-vindo ao ensino de JavaScript & jQuery..',
            'detalhes' => 'Capa comum 640 páginas',
            'ativo' => 'S',
            'imagem' => 'img/seed_livro1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HTML e CSS',
            'codigo' => '8032',
            'fabricante' => 'William Alves',
            'categoria' => 'livros',
            'valor' => '56.49',
            'descricao' => 'Bem-vindo a uma melhor maneira de aprender HTML & CSS.',
            'detalhes' => 'Capa comum 512 páginas',
            'ativo' => 'S',
            'imagem' => 'img/seed_livro2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Laravel para ninjas',
            'codigo' => '8033',
            'fabricante' => 'Ademir C. Gabardo',
            'categoria' => 'livros',
            'valor' => '41.60',
            'descricao' => 'Frameworks modernos como o Laravel são indispensáveis para sistemas web.',
            'detalhes' => 'Capa comum 208 páginas',
            'ativo' => 'S',
            'imagem' => 'img/seed_livro3.jpg'
        ]);
        // seed moda
        DB::table('produtos')->insert([
            'nome' => 'Moletom Criativa Urbana',
            'codigo' => '8040',
            'fabricante' => 'Nerd Geek',
            'categoria' => 'moda',
            'valor' => '97',
            'descricao' => 'Fabricado em material confortável ao vestir e macio ao toque.',
            'detalhes' => 'Moletom canguru quentinho, macio e confortável.',
            'ativo' => 'S',
            'imagem' => 'img/seed_moda.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Moletom Anonymous Faraó',
            'codigo' => '8041',
            'fabricante' => 'Nerd Geek',
            'categoria' => 'moda',
            'valor' => '107.99',
            'descricao' => 'Fabricado em material confortável ao vestir e macio ao toque.',
            'detalhes' => 'Moletom canguru quentinho, macio e confortável.',
            'ativo' => 'S',
            'imagem' => 'img/seed_moda1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Camiseta pugPool',
            'codigo' => '8042',
            'fabricante' => 'Nerd Universe',
            'categoria' => 'moda',
            'valor' => '46.90',
            'descricao' => 'Quando o Mercenário Pug Wilson recebeu a vacina do projeto X.',
            'detalhes' => 'Confecção de nossas camisetas meia malha 100% algodão.',
            'ativo' => 'S',
            'imagem' => 'img/seed_moda2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Camiseta Prrrngles',
            'codigo' => '8043',
            'fabricante' => 'Nerd Universe',
            'categoria' => 'moda',
            'valor' => '46.90',
            'descricao' => 'Fabricado em material confortável ao vestir e macio ao toque.',
            'detalhes' => 'Confecção de nossas camisetas meia malha 100% algodão.',
            'ativo' => 'S',
            'imagem' => 'img/seed_moda3.jpg'
        ]);
        // seed musica
        DB::table('produtos')->insert([
            'nome' => 'Vitrola com USB e Bluetooth',
            'codigo' => '8050',
            'fabricante' => 'Raveo',
            'categoria' => 'musica',
            'valor' => '385',
            'descricao' => 'O toca-discos da vitrola.',
            'detalhes' => 'Vitrola Raveo Sonetto, Adaptador de Tensão 5 Volts.',
            'ativo' => 'S',
            'imagem' => 'img/seed_musica.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Guitarra Flying V PRO',
            'codigo' => '8051',
            'fabricante' => 'Gibson',
            'categoria' => 'musica',
            'valor' => '9669.02',
            'descricao' => 'Fiel ao ícone original do heavy metal e com upgrade na performance.',
            'detalhes' => 'Ímãs de cerâmica e os humbuckers 496R e 500T.',
            'ativo' => 'S',
            'imagem' => 'img/seed_musica1.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Contrabaixo Contemporary',
            'codigo' => '8052',
            'fabricante' => 'Hofner',
            'categoria' => 'musica',
            'valor' => '4163.90',
            'descricao' => 'Hofner em um design alternativo cutaway.',
            'detalhes' => 'Leve e fácil de tocar possui escala curta de 30" polegadas.',
            'ativo' => 'S',
            'imagem' => 'img/seed_musica2.jpg'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Jukebox Com Bluetooth',
            'codigo' => '8053',
            'fabricante' => 'Jukebox',
            'categoria' => 'musica',
            'valor' => '5548.90',
            'descricao' => ' Baseado em um projeto clássico, produto é um deleite para os olhos e ouvidos.',
            'detalhes' => 'Peso	47.0 kg.',
            'ativo' => 'S',
            'imagem' => 'img/seed_musica3.jpg'
        ]);
    }
}

