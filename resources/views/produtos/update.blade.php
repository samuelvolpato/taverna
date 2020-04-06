@extends('layouts.app')
@section('pagina_titulo', 'Editar '.$produto->nome)


@section('content')

<div class="row justify-content-center">

    <div class="form-group col-12 text-center">
        <img src="{{ asset($produto->imagem) }}" class="rounded-circle" width="230" height="230">
    </div>

    <form action="{{ url('/produtos/update/'.$produto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="nome" class="text-white efeitoLink">Nome do Produto</label>
            <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" value="{{ $produto->nome }}" id="nome" name="nome">
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            </div>
            <div class="form-group">
                <label for="codigo" class="text-white efeitoLink">Código do Produto</label>
                <input type="text" class="form-control{{$errors->has('codigo') ? ' is-invalid' : ''}}" value="{{ $produto->codigo }}" id="codigo" placeholder="Informe o código do produto" name="codigo" readonly>
                <div class="invalid-feedback">{{ $errors->first('codigo') }}</div>
            </div>
            <div class="form-group">
                <label for="fabricante" class="text-white efeitoLink">Fabricante do Produto</label>
                <input type="text" class="form-control{{$errors->has('fabricante') ? ' is-invalid' : ''}}" value="{{ $produto->fabricante }}" id="fabricante" placeholder="Informe o fabricante do produto" name="fabricante">
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
                <input type="text" class="form-control{{$errors->has('valor') ? ' is-invalid' : ''}}" value="{{ $produto->valor }}" id="valor" placeholder="Informe o preço" name="valor">
                <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
            </div>
            <div class="form-group">
                <label for="descricao" class="text-white efeitoLink">Descrição do Produto</label>
                <textarea onclick="contadorElemento0()" onblur="contadorElemento0()" onkeypress="contadorElemento0()" value="{{ $produto->descricao }}" id="descricao" cols="30" rows="5" maxlength="500" class="form-control{{$errors->has('descricao') ? ' is-invalid' : ''}}" placeholder="Faça uma breve descrição do produto" name="descricao"></textarea>
                <div id="restante"></div>
                <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
            </div>
            <div class="form-group">
                <label for="detalhes" class="text-white efeitoLink">Detalhes do Produto</label>
                <textarea onclick="contadorElemento1()" onblur="contadorElemento1()" onkeypress="contadorElemento1()" value="{{ $produto->detalhes }}" id="detalhes" cols="30" rows="5" maxlength="500" class="form-control"  placeholder="Informe características do produto (peso, opções de tamanho, voltagem e etc)" name="detalhes"></textarea>
                <div id="restante1"></div>
                <div class="invalid-feedback">{{ $errors->first('detalhes') }}</div>
            </div>
            <div class="form-group">
                <label for="imagem" class="text-white efeitoLink">Imagens do Produto</label>
                <input type="file" class="form-control-file{{ $errors->has('imagem') ? ' is-invalid':'' }}" id="imagem" name="imagem">
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

            <button class="btn btnPadrao" id="cadastrar">Atualizar</button>
        </form>
        
    </div>
</div>

@endsection