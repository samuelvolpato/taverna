@extends('layouts.app')


@section('content')

<script type="text/javascript">

var elementos = document.getElementsByTagName('textarea');

function contadorElemento0()
{
    var max = elementos[0].getAttribute('maxlength');
    var atual = elementos[0].value.length;
    var valor = new Number();
    valor = max - atual;
    if (valor > 0) {
        if (valor == 1){valor = 0;}
        document.getElementById('restante').innerHTML = valor + '/' + max;
        document.getElementById('restante').style.color = 'white';
        document.getElementById('cadastrar').disabled = '';
    } else {
        document.getElementById('cadastrar').disabled = 'disabled';
        document.getElementById('restante').style.color = 'red';
    }
}

function contadorElemento1()
{
    var max = elementos[1].getAttribute('maxlength');
    var atual = elementos[1].value.length;
    var valor = new Number();
    valor = max - atual;
    if (valor > 0) {
        if (valor == 1){valor = 0;}
        document.getElementById('restante1').innerHTML = valor + '/' + max;
        document.getElementById('restante1').style.color = 'white';
        document.getElementById('cadastrar').disabled = '';
    } else {
        document.getElementById('cadastrar').disabled = 'disabled';
        document.getElementById('restante1').style.color = 'red';
    }
}


</script>


<div class="container">
    
@if(!empty($retorno))
    <div class="row justify-content-center">
        <div class="card text-white bg-dark mb-3 col" style="max-width: 18rem;">
            <div class="card-header">Cadastro de Produtos</div>
            <div class="card-body">
                <h5 class="card-title">Sucesso!</h5>
            <p class="card-text">{{ $retorno}}</p>
            </div>
        </div>
    </div>
@endif


<div class="row justify-content-center">

    <form action="{{ route('produtos.cadastro') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="nome" class="text-white efeitoLink">Nome do Produto</label>
                <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" value="{{ old('nome') }}" value="{{ old('nome') }}" id="nome"  placeholder="Informe o nome do produto" name="nome">
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            </div>
            <div class="form-group">
                <label for="codigo" class="text-white efeitoLink">Código do Produto</label>
                <input type="text" class="form-control{{$errors->has('codigo') ? ' is-invalid' : ''}}" value="{{ old('codigo') }}" id="codigo" placeholder="Informe o código do produto" name="codigo">
                <div class="invalid-feedback">{{ $errors->first('codigo') }}</div>
            </div>
            <div class="form-group">
                <label for="fabricante" class="text-white efeitoLink">Fabricante do Produto</label>
                <input type="text" class="form-control{{$errors->has('fabricante') ? ' is-invalid' : ''}}" value="{{ old('fabricante') }}" id="fabricante" placeholder="Informe o fabricante do produto" name="fabricante">
                <div class="invalid-feedback">{{ $errors->first('fabricante') }}</div>
            </div>

            <div class="form-group">
                <label for="categoria" class="text-white efeitoLink">Categoria do Produto</label>
                <select class="custom-select" name="categoria">
                    <option selected>Escolha a Categoria do Produto</option>
                    <option value="colecionaveis">Colecionáveis</option>
                    <option value="games">Games</option>
                    <option value="informatica">Informática</option>
                    <option value="livros">Livros</option>
                    <option value="moda">Moda</option>
                    <option value="musica">Música</option>
                </select>
            </div>

            <div class="form-group">
                <label for="valor" class="text-white efeitoLink">Preço</label>
                <input type="text" class="form-control{{$errors->has('valor') ? ' is-invalid' : ''}}" value="{{ old('valor') }}" id="valor" placeholder="Informe o preço" name="valor">
                <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
            </div>
            <div class="form-group">
                <label for="descricao" class="text-white efeitoLink">Descrição do Produto</label>
                <textarea onclick="contadorElemento0()" onblur="contadorElemento0()" onkeypress="contadorElemento0()" value="{{ old('descricao') }}" id="descricao" cols="30" rows="5" maxlength="500" class="form-control{{$errors->has('descricao') ? ' is-invalid' : ''}}" placeholder="Faça uma breve descrição do produto" name="descricao"></textarea>
                <div id="restante"></div>
                <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
            </div>
            <div class="form-group">
                <label for="detalhes" class="text-white efeitoLink">Detalhes do Produto</label>
                <textarea onclick="contadorElemento1()" onblur="contadorElemento1()" onkeypress="contadorElemento1()" value="{{ old('detalhes') }}" id="detalhes" cols="30" rows="5" maxlength="500" class="form-control"  placeholder="Informe características do produto (peso, opções de tamanho, voltagem e etc)" name="detalhes"></textarea>
                <div id="restante1"></div>
                <div class="invalid-feedback">{{ $errors->first('detalhes') }}</div>
            </div>
            <div class="form-group">
                <label for="imagem" class="text-white efeitoLink">Imagens do Produto</label>
                <input type="file" class="text-white form-control-file{{ $errors->has('imagem') ? ' is-invalid':'' }}" id="imagem" name="imagem">
            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('imagem') }}</div>
            </div>

            <div class="form-group row">
                <label for="" class="text-white col-md-4 col-form-label text-md-right">{{ __('Produto Ativo?') }}</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ativo" id="ativo_sim" value="S">
                    <label class="form-check-label text-white" for="ativo_sim">{{ __('Sim') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ativo" id="ativo_nao" value="N">
                    <label class="form-check-label text-white" for="ativo_nao">{{ __('Não') }}</label>
                </div>
            </div>

            <button class="btn btnPadrao" id="cadastrar">Cadastrar Produto</button>
        </form>
        
    </div>
            <div class="row justify-content-center mt-5">
                
                        <a class="btn btnPadrao col-5" id="cadastrar" href="{{ route('produtos.show')}}">Visualizar Produtos</a>
               
            </div>
</div>

@endsection