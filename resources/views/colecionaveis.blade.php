@extends('layouts.app')

@section('content')
    @php
        $produtosColecionaveis = [
            "Naruto" => [
                "img/naruto.jpg",
                "Narutinho herói de Konoha",
                129.99,
                "colecionaveis"
            ],
            "Sasuke" => [
                "img/sasuke.jpg",
                "Sasuke",
                1.00,
                "colecionaveis"
            ],
            "Shikamaru" => [
                "img/shikamaru.jpg",
                " Shikamaru > Einstein",
                199.99,
                "colecionaveis"
            ],
            "Jiraiya" => [
                "img/jiraiya.jpg",
                "Jiraiya ero-senin ",
                222.99,
                "colecionaveis"
            ],
            "Tanjiro" => [
                "img/tanjiro.jpg",
                "Tanjiro pocket",
                120.00,
                "colecionaveis"
            ],
            "Nezuko" => [
                "img/mina.jpg",
                "Nezuko fofinha",
                120.00,
                "colecionaveis"
            ],
            "Zenitsu e Inozuke" => [
                "img/zenitsu.jpg",
                "Melhor dupla everr",
                220.00,
                "colecionaveis"
            ]
        ];   
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
                    <img class="d-block w-100" src="{{ asset('img/banner_cod.jpg') }}" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner_presentes.jpg') }}" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner_moda.jpg') }}" alt="Terceiro Slide">
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
            <?php foreach ($produtosColecionaveis as $nomeColecionaveis => $infosColecionaveis) { ?>
                <div class="col-lg-3 col-sm-6 m-0 p-3">
                    <img src="<?php echo $infosColecionaveis[0]; ?>"  class=" card-img-top img-games" alt="<?php echo $infosColecionaveis[1]; ?>" width="500" heigth="500">
                    <div class="row justify-content-center mt-2 px-2">
                        <h5 class=" text-white"><?php echo $infosColecionaveis[1]; ?></h5>
                    </div>
                    <div class="row p-0 mt-2 ">
                        <ul class="d-flex flex-row justify-content-center text-white col">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><img src="{{ asset('img/taverna_logo.svg') }}" class="ml-2" style="height: 20px" alt="">
                            <small class="text-white">taverna indica</small></li>
                        </ul>
                    </div>
                    <div class="row p-0 mt-2 justify-content-around">
                        <p class="text-white"><strong><?php echo $infosColecionaveis[3]; ?> ofertas a partir de</strong></p>
                    </div>
                    <div class="row justify-content-center">
                        <h2 class="text-white text-center">R$ <?php echo $infosColecionaveis[2]; ?></h2>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <button class="btn btnPadrao" title="Confira Já!">Confira Já! <i class="fas fa-thumbs-up"></i></button>
                    </div>
                </div>
            <?php } ?>         
    </section>
    
            <!-- CASO QUEIRA VOLTAR COM O (FIQUE POR DENTRO) DENTRO DE CADA PAGINA, PEGAR NO APP.BLADE E COLAR AQUI EM BAIXO -->
@endsection
