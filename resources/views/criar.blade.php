@extends('layouts.app')

@section('content')
<div class="container">

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="productName" class="text-white efeitoLink">Nome do Produto</label>
            <input type="text" class="form-control" id="productName" placeholder="Informe o nome do produto">
        </div>
        <div class="form-group">
            <label for="productCode" class="text-white efeitoLink">Código do Produto</label>
            <input type="text" class="form-control" id="productCode" placeholder="Informe o código do produto">
        </div>
        <div class="form-group">
            <label for="productBrand" class="text-white efeitoLink">Fabricante do Produto</label>
            <input type="text" class="form-control" id="productCode" placeholder="Informe o fabricante do produto">
        </div>
        <div class="form-group">
            <label for="productPrice" class="text-white efeitoLink">Preço</label>
            <input type="text" class="form-control" id="productPrice" placeholder="Informe o preço">
        </div>
        <div class="form-group">
            <label for="productDescription" class="text-white efeitoLink">Descrição do Produto</label>
            <textarea name="" id="productDescription" cols="30" rows="5" class="form-control" placeholder="Faça uma breve descrição do produto"></textarea>
        </div>
        <div class="form-group">
            <label for="productDetails" class="text-white efeitoLink">Detalhes do Produto</label>
            <textarea name="" id="productDetails" cols="30" rows="5" class="form-control" placeholder="Informe características do produto (peso, opções de tamanho, voltagem e etc)"></textarea>
        </div>
        <div class="form-group">
            <label for="productImg" class="text-white efeitoLink">Imagens do Produto</label>
            <input type="file" id="productImg">
        </div>
        <button class="btn btnPadrao">Cadastrar Produto</button>
    </form>
</div>

@endsection