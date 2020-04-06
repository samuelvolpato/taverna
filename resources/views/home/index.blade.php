@extends('layouts.app')
@section('pagina_titulo', 'Taverna.com')

@section('content')
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
		
            <?php foreach ($registros as $registro) { ?>
                <div class="col-lg-3 col-sm-6 m-0 p-3">
                <a href="/produto/{{ $registro->id }}">
                    <img src="{{ $registro->imagem }}" class="card-img-top" alt="{{ $registro->nome }}" title="{{ $registro->nome }}">
                </a>
                
                <div class="row justify-content-center mt-2 px-2">
                    <h5 class=" text-white">{{ $registro->nome }}</h5>
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
                    <p class="text-white"><strong>Ofertas a partir de</strong></p>
                </div>
                <div class="row justify-content-center">
                    <h2 class="text-white text-center">R$ {{ number_format($registro->valor, 2, ',', '.') }}</h2>
                </div>
                <div class="row justify-content-center mt-2">
                    <a href="/produto/{{ $registro->id }}" class="btn btnPadrao" title="Confira Já!">Confira Já! <i class="fas fa-thumbs-up"></i></a>
                </div>
            </div>
        <?php } ?>
        
        
        
</section>

@endsection
