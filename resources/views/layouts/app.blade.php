<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                        <a class="order-2 order-md-1 p-0 navbar-brand" href="{{ route ('index') }}" title="Taverna.com"><img src="{{ asset('img/taverna_logo_nav.png') }}" alt=""></a>
                        
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
                                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('login') }}">.entrar</a>
<<<<<<< HEAD
<<<<<<< HEAD
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('login') }}">.entrar com <i class="fab fa-facebook"></i></a>
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('login') }}">.entrar com <i class="fab fa-google"></i></a>
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('register') }}">.cadastrar <i class="fab fa-google"></i></a>
=======
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('register') }}">.cadastrar</i></a>
>>>>>>> 6a17095525861dd94b93abbf7142fa1344e61a23
=======
                                        <a class="btn btnPadrao border-0 text-white efeitoLink" href="{{ route ('register') }}">.cadastrar</i></a>
>>>>>>> 6a17095525861dd94b93abbf7142fa1344e61a23
                                    </div>
                                </div>
                            <a class="btn btnPadrao border-0" href="#" title="Acessar lista"><i class="fas fa-heart p-0 btnUserWishCartSearchDrop"></i></a>
                            <a class="btn btnPadrao border-0" href="#" title="Acessar carrinho"><i class="fas fa-shopping-cart p-0 btnUserWishCartSearchDrop"></i></a>
                        </div>
                    </nav>  
        
                </div>
                <div class="collapse nav container-fluid justify-content-center" id="navbarNav">
                    <ul class="d-flex flex-md-row flex-column p-0" >
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route ('games') }}">.games</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route ('colecionaveis') }}">.colecionaveis</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('moda') }}">.moda</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('informatica') }}">.informatica</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route('livros') }}">.livros</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink font-weight-bold">.todos os departamentos</button></li>        
                    </ul>
                </div>
            </div>
            {{-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> --}}
            <div>   
                @guest
                    <ul class="navbar-nav flex-row mr-auto p-0">
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link pr-2 text-white">{{ __('Cadastro') }}</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="navbar-nav flex-row ml-auto p-0">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link pr-2 text-white">{{ __('Minha Conta') }}</a>
                        </li>
                    </ul>
                @else  
                    <ul class="navbar-nav flex-row mr-auto text-white">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link pr-2 text-white">Contatos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-row ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Olá, {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Editar Perfil</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endguest
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="container-fluid">
            <section class="row p-2 mt-3 ">
                <div class="col-12 d-flex barraChamada">
                    <h3 class="p-0 m-0"><i class="fas fa-envelope-open"></i> .fique por dentro!</h3>
                </div>
            </section>
        </div>

        <!-- FORMULÁRIO NEWSLETTER -->
        <div class="container-fluid my-3">
        <div class="row text-center my-3">
            <h2 class="text-white col-12">Não deixe ninguém de fora de promoções e novidades imperdíveis!</h2>
            <h2 class="text-white col-12">Avise um amigo e compartilhe! </h2>
        </div>
        <div class="row justify-content-center col-12">
            <form class="">
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg bg-transparent text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu E-mail">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg bg-transparent text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o E-mail de seu amigo">
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-lg btnPadrao ">Cadastrar!</button>
                </div>
            </form>
        </div>
        </div>

    <!-- FORMULÁRIO NEWSLETTER -->
    <div class="col-12 bg-secondary" style="height: 300px;">
        <h1 class="text-white text-center">banner</h1>
    </div>

    <!-- FOOTER -->
        <footer class="d-flex row  mt-3 border-top">
            <div class="container-fluid justify-content-center mt-2 ">
                <div class="row">        
                    <ul class="col nav flex-row justify-content-center p-0">
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route ('sobrenos') }}">.sobre nós</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="{{ route ('faq') }}">.dúvidas</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="">.central de atendimento</a></button></li>
                        <li class="nav-item mx-4"><button class="btn btnPadrao border-0 text-white efeitoLink"><a href="">.venda com a gente</a></button></li>
                    </ul>
                </div>
                <div class="row p-2 justify-content-center">
                    <div class="col-md-3 col">
                        <img src="{{ asset('img/taverna_logo_nav.png') }}" class="img-fluid p-2" title="Taverna.com">
        
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
</body>
</html>
