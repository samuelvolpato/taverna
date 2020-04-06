@extends('layouts.app')
@section('pagina_titulo', 'F.A.Q')
@section('content')

<div id="titulo-faq" class="container d-flex justify-content-center"><h1> FAQ Taverna </h1></div>

    <section class="faq d-flex flex-column align-items-start section-faq">

        {{-- <div class="container">
            <h3 class="h3-faq"> Como devo proceder para executar o cadastro?</h3>
            <p class="p-texto"> Acesse o nosso link Cadastro acima no nosso menu ou clique <a href= {{ route('register') }} >aqui</a></p>
        </div> --}}
        <div class="container faqtaverna">
            <h3 class="h3-faq"> Porque o nome Taverna?</h3>
            <p class="p-texto">  Tentamos dar uma experiência maior ao nosso usuário com ambiente medieval , com influências de jogos de RPG</p>
        </div>
        <div class="container faqtaverna">
            <h3 class="h3-faq"> Posso ter uma conta de cliente e vendedor? </h3>
            <p class="p-texto"> No momento atual, apenas a conta como cliente, estamos trabalhando nesse projeto! </p>
        </div>
        <div class="container faqtaverna">
            <h3 class="h3-faq"> Quem é melhor, Goku ou Vegeta? </h3>
            <p class="p-texto"> É claro que o Vegeta seu verme nojento! </p>
        </div>
        <div class="container faqtaverna">
            <h3 class="h3-faq"> Esqueci minha senha , e agora? </h3>
            <p class="p-texto"> Significa que  - <em>YOU SHOULD NOT PASS!!!</em> </p>
        </div>

    </section>

</div>

@endsection