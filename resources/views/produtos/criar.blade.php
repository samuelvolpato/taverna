@extends('layouts.app')

@section('content')
<div class="container">
    
@if(!empty($retorno)) 
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h3 class="alert alert-success">{{ $retorno }}</h3>
        </div>
    </div>
@endif
<div class="row justify-content-center">

    <form action="{{ route('cadastro_produto') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="nome" class="text-white efeitoLink">Nome do Produto</label>
                <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" id="nome" value="{{ old('nome') }}" placeholder="Informe o nome do produto" name="nome">
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            </div>
            <div class="form-group">
                <label for="codigo" class="text-white efeitoLink">Código do Produto</label>
                <input type="text" class="form-control{{$errors->has('codigo') ? ' is-invalid' : ''}}" id="codigo" placeholder="Informe o código do produto" name="codigo">
                <div class="invalid-feedback">{{ $errors->first('codigo') }}</div>
            </div>
            <div class="form-group">
                <label for="fabricante" class="text-white efeitoLink">Fabricante do Produto</label>
                <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" id="fabricante" placeholder="Informe o fabricante do produto" name="fabricante">
                <div class="invalid-feedback">{{ $errors->first('fabricante') }}</div>
            </div>
            <div class="form-group">
                <label for="preco" class="text-white efeitoLink">Preço</label>
                <input type="text" class="form-control{{$errors->has('preco') ? ' is-invalid' : ''}}" id="preco" placeholder="Informe o preço" name="preco">
                <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
            </div>
            <div class="form-group">
                <label for="descricao" class="text-white efeitoLink">Descrição do Produto</label>
                <textarea id="descricao" cols="30" rows="5" class="form-control{{$errors->has('descricao') ? ' is-invalid' : ''}}" placeholder="Faça uma breve descrição do produto" name="descricao"></textarea>
                <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
            </div>
            <div class="form-group">
                <label for="detalhes" class="text-white efeitoLink">Detalhes do Produto</label>
                <textarea id="detalhes" cols="30" rows="5" class="form-control" placeholder="Informe características do produto (peso, opções de tamanho, voltagem e etc)" name="detalhes"></textarea>
                <div class="invalid-feedback">{{ $errors->first('detalhes') }}</div>
            </div>
            <div class="form-group">
                <label for="Img" class="text-white efeitoLink">Imagens do Produto</label>
                <input type="file" id="Img" name="img_path">
            </div>
            <button class="btn btnPadrao">Cadastrar Produto</button>
        </form>

</div>
</div>

@endsection