<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pagina_titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.mask.js') }}" defer></script>
    <script src="{{ asset('js/zoomsl.js') }}" defer></script>
    <script src="{{ asset('js/carrinho.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/favicon_taverna_48x48.png') }}" sizes="96x96" type="image/png">
    <link async defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header>
            <div class="container-fluid navHeader p-0">
                <div class="container">
        
                    <nav class="navbar navbar-expand-md justify-content-between">
                        <a class="order-2 order-md-1 p-0 navbar-brand" href="{{ route('index') }}" title="Taverna.com"><img src="{{ asset('img/taverna_logo_nav.png') }}" alt=""></a>
                        
                        <button class="order-1 navbar-toggler p-0 m-0 border-0 btnUserWishCartSearchDrop" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                        
                        <button class="order-md-2 navbar-toggler p-0 btn btnPadrao d-none d-md-block border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-chevron-circle-down btnUserWishCartSearchDrop"></i></button>
        
        
        
                        <form class="order-4 order-md-3 col-12 col-md-6 form-inline flex-nowrap p-0 m-0">
                            <input class="form-control mr-sm-2 bg-transparent flex-fill text-white" type="search" placeholder="O que você procura?" aria-label="Search">
                            <button class="btn my-2 my-sm-0 border-0" type="submit"><i class="fas fa-search btnUserWishCartSearchDrop"></i></button>
                        </form>
                        
                        <div class="order-3 order-md-4 flex-row flex-nowrap nav nav-pills nav-fill ">
                                <div class="dropdown">
                                    <a class="btn btnPadrao border-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Acessar sua conta">
                                        <i class="fas fa-user p-0 btnUserWishCartSearchDrop"></i>
                                    </a>
                                    @guest
                                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                        @if(Route::has('register'))
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route('register')}}">{{ __('.cadastrar') }}</a>
                                        @endif
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route('login') }}">{{ __('.entrar') }}</a>
                                    </div>
                                    @else
                                        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                                @if (Auth::user()->name == "Admin")
                                                <a class="btn btnPadrao border-0 text-white efeitoLink" href="/produtos/criar">{{ __('.criar produto') }}</a>
                                                <a class="btn btnPadrao border-0 text-white efeitoLink" href="/produtos/show">{{ __('.listar produtos') }}</a>
                                                    
                                                @endif
                                            <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route('carrinho.compras') }}">{{ __('.minhas compras') }}</a>
                                            <a onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route('logout') }}">{{ __('.sair') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                        
                                </div>
                                @endguest
                            <a class="btn btnPadrao border-0" href="{{ route('indisponivel') }}" title="Acessar lista"><i class="fas fa-heart p-0 btnUserWishCartSearchDrop"></i></a>
                            <a class="btn btnPadrao border-0" href="{{ route('carrinho.index') }}" title="Acessar carrinho"><i class="fas fa-shopping-cart p-0 btnUserWishCartSearchDrop"></i></a>
                        </div>
                    </nav>  
        
                </div>
                <div class="collapse nav container-fluid justify-content-center" id="navbarNav">
                    <ul class="d-flex flex-md-row flex-column p-0" >
                    <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('games')}}">.games</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('colecionaveis')}}">.colecionaveis</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('moda')}}">.moda</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('informatica')}}">.informatica</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('livros')}}">.livros</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('musica')}}">.música</a></button></li>                     </ul>
                </div>

                <div class="collapse nav container" id="navbarNavDropdown">
                        <ul class="d-flex flex-column p-0" >
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('games')}}">.games</a></button></li>
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('colecionaveis')}}">.colecionaveis</a></button></li>
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('moda')}}">.moda</a></button></li>
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('informatica')}}">.informatica</a></button></li>
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('livros')}}">.livros</a></button></li>
                            <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('musica')}}">.música</a></button></li>        
                        </ul>
                    </div>
                    
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>


    <!-- FOOTER -->
        <footer class="d-flex row  mt-3 border-top">
            <div class="container-fluid justify-content-center mt-2 ">
                <div class="row">        
                    <ul class="col nav flex-row justify-content-center p-0">
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('sobrenos')}}">.sobre nós</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('faq')}}">.dúvidas</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('contato')}}">.central de atendimento</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('indisponivel')}}">.venda com a gente</a></button></li>
                    </ul>
                </div>
                <div class="row p-2 justify-content-center">
                    <div class="col-md-3 col">
                        <a class="img-fluid p-2" href="{{ route('index') }}" title="Taverna.com"><img src="{{ asset('img/taverna_logo_nav.png') }}" alt=""></a>    
                    </div>
        
                    <div class="col">
                        <div class="row navHeader">        
                            <ul class="col nav flex-row flex-nowrap justify-content-end">
                                <li class="nav-item mx-2"><button class="btn btnPadrao border-0" title="Instagram"><i class="fab fa-instagram"></i></button></li>
                                <li class="nav-item mx-2"><button class="btn btnPadrao border-0" title="Facebook"><i class="fab fa-facebook-square"></i></button></li>
                                <li class="nav-item mx-2"><button class="btn btnPadrao border-0" title="Youtube"><i class="fab fa-youtube"></i></button></li>
                                <li class="nav-item mx-2"><button class="btn btnPadrao border-0" title="Twitter"><i class="fab fa-twitter-square"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <p class="text-muted text-center">
                            Taverna - Companhia Digital / CNPJ 12.618.039/0001-56 / Inscrição Estadual 988.410.420.120 / Endereço Travessa Cajamarca, 442 - São Paulo, SP - 03378-052
                        </p>
                    </div>    
            </div>
        </footer>
    </div>
    @stack('scripts')
</body>
</html>
        
