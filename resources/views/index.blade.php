@extends('layouts.app')

@section('content')
    @php    
        
        $produtosCard = [
            "Monitor Gamer LG" => [
                "img/monitor_gamer.jpg",
                "Monitor Gamer LG Ultrawide",
                "599,99",
                15
            ],
            "Console Nintendo Switch" => [
                "img/nintendo_switch.jpg",
                "Console Nintendo Switch Diablo Bundle",
                "1900,00",
                8
            ],
            "Game Resident Evil 7" => [
                "img/resident_evill.jpg",
                "Game Resident Evil 7 - PS4",
                "96,99",
                10
            ],
            "Mouse Pad Gamer" => [
                "img/mouse_pad02.jpg",
                "Mouse Pad Gamer XYZ",
                "22,90",
                9
            ]
        ];

        $produtosHomeLoja = [
            "Darth Vader" => [
                "img\darthvader_boneco.jpg",
                "Darth Vader - Star Wars Iv: A New Hope - Hot Toys",
                "2.089,05",
                "3x de R$696,35"
            ],
            "Deadpool" => [
                "img\deadpool_boneco.jpg",
                "Deadpool - Hot toys",
                "2.852,75",
                "10x de R$ 285,27"
            ],
            "DrEstranho" => [
                "img\drestranho_boneco.jpg",
                "Dr. Estranho - Hot Toys",
                "3.034,50",
                "10x de R$ 303,45"
            ],
            "Robocop" => [
                "img/robocop_boneco.jpg",
                "Robocop 3 - Hot Toys",
                "1.999,00",
                "10x de R$ 199,90"
            ],
            "Mortal Kombat 11" => [
                "img\mortal-kombat-11.jpg",
                "Game Mortal Kombat 11 - PS4",
                "108,99",
                "3x de R$ 36,33"
            ],
            "Resident Evil 7" => [
                "img/resident_evill.jpg",
                "Game Resident Evil 7 - PS4",
                "96,99",
                "3x de 32,33"
            ],
            "PES 2019" => [
                "img\pes_2019.jpg",
                "Game Pro Evolution Soccer 2019 - PS4",
                "79,90",
                "2x de R$ 39,95"
            ],
            "Voltante Nintendo Switch" => [
                "img/volante_switch.jpg",
                "Volante Wheel Mario Kart Nintendo Switch",
                "42,50",
                "2x de R$ 21,25"
            ]
        ]
    
    @endphp

<!-- CAROUSEL DE DESTAQUES -->
<div class="container-fluid p-0">
        <div id="carouselHome" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHome" data-slide-to="1"></li>
                <li data-target="#carouselHome" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img\banner_cod.jpg') }}" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src=" {{ asset('img\banner_presentes.jpg') }}" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img\banner_moda.jpg') }}" alt="Terceiro Slide">
                </div>
            </div>
            <div class="setasCarousel">
                <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                    <i class="fas fa-caret-left"></i>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                        <i class="fas fa-caret-right"></i>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <section class="row p-2 mt-3 ">
            <div class="col-12 d-flex barraChamada">
                <h3 class="p-0 m-0"><i class="fas fa-grin-alt"></i> .ofertas épicas!</h3>
            </div>
        </section>
    </div>



    <!-- CARDS PROMOCIONAIS -->

    <section class="container my-3 p-0">

        <div class="row m-0 px-0 py-2" style="width: 100%">

                <!-- @foreach ($products as $product)
                    <div class="product">
                        <a href="#"><img src="{{ $product->img_path }}" alt="product"></a>
                        <a href="#"><div class="product-name">{{ $product->nome }}</div></a>
                        <div class="product-price">{{ $product->preco }}</div>
                    </div>
                @endforeach -->
                
            <?php foreach ($produtosCard as $nomeProduto => $infosProduto) { ?>
                <div class="col-lg-3 col-sm-6 m-0 p-3">
                    <img src="<?php echo $infosProduto[0]; ?>" class="card-img-top" alt="<?php echo $infosProduto[1]; ?>">
                    <div class="row justify-content-center mt-2 px-2">
                        <h5 class=" text-white"><?php echo $infosProduto[1]; ?></h5>
                    </div>
                    <div class="row p-0 mt-2 ">
                        <ul class="d-flex flex-row justify-content-center text-white col">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><img src="{{ asset('img\taverna_logo.svg') }}" class="ml-2" style="height: 20px" alt="">
                            <small class="text-white">taverna indica</small></li>
                        </ul>
                    </div>
                    <div class="row p-0 mt-2 justify-content-around">
                        <p class="text-white"><strong><?php echo $infosProduto[3]; ?> ofertas a partir de</strong></p>
                    </div>
                    <div class="row justify-content-center">
                        <h2 class="text-white text-center">R$ <?php echo $infosProduto[2]; ?></h2>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <button class="btn btnPadrao" title="Confira Já!">Confira Já! <i class="fas fa-thumbs-up"></i></button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    
@endsection