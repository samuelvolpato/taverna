@extends('layouts.app')
@section('pagina_titulo', $registro->nome)

@section('content')

<div class="container">
        <div class="card mb-3 bg-dark text-white  align-self-center">
            <div class="row no-gutters h-100">
                <div class="col-md-4 justify-content-center align-self-center ">
                    <div class="my-auto" >
                        <img src="{{ asset($registro->imagem) }}" id="zoom_img" class="card-img " alt="...">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body text-md-right text-center">
                        <h2 class="card-title mb-md-5">{{ $registro->nome }}</h2>
                    <ul class="list-intline" title="Avaliação de {{ $registro->nome }}">
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                        <li class="list-inline-item"><i class="far fa-star"></i></li>
                    </ul>
                    <p class="card-text small mb-md-5">{{ $registro->codigo }}</p>
                    <p class="card-text small">{{ $registro->categoria }}</p>
                    <p class="card-text"><strong>{{ $registro->fabricante }}</strong></p>
                    <p class="card-text lead">{{ $registro->descricao }}</p>
                    <p class="card-text">{{ $registro->detalhes}}</p>
                    <p class="card-text"> <h2>R$ {{ number_format($registro->valor, 2, ',', '.') }}</h2></p>
                    
                    <form method="POST" action="{{ route('carrinho.adicionar') }}">
                        {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $registro->id }}">
                        <button class="btn btnPadrao btn-lg mb-0">Adicionar ao carrinho <i class="fas fa-shopping-cart"></i></button>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script type="text/javascript" src="/js/zoomsl.min.js"></script>
<script> $('#zoom_img').imagezoomsl();</script>
@endpush
@endsection
