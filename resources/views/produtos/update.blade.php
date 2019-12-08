@extends('layouts.app')


@section('content')

  <h2 class="row justify-content-center">Produtos</h2>
  <div class="container">
      <form action="{{url('produtos/update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
         {{ method_field('PUT') }} 
         <div class="form-group">
           <img src="{{ url($product->img_path)}}" class="rounded-circle" width="200" height="200" alt="Imagem">
         </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ $product->nome}}" id="nome" name="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>
        <div class="form-group">
            <label for="codigo">código</label>
            <input type="text" class="form-control{{$errors->has('codigo') ? ' is-invalid':''}}" value="{{ $product->codigo}}" id="codigo" name="codigo">
            <div class="invalid-feedback">{{ $errors->first('codigo') }}</div>
        </div>
        <div class="form-group">
            <label for="fabricante">Fabricante</label>
            <input type="text" class="form-control{{$errors->has('fabricante') ? ' is-invalid':''}}" value="{{ $product->fabricante}}" id="fabricante" name="fabricante">
            <div class="invalid-feedback">{{ $errors->first('fabricante') }}</div>
        </div>
        <div class="form-group">
            <label for="img_path">Preço</label>
            <input type="text" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" value="{{ $product->preco}}" id="preco" name="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control{{$errors->has('descricao') ? ' is-invalid':''}}" value="{{ $product->descricao}}" id="descricao" name="descricao">
            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
        </div>
        <div class="form-group">
            <label for="detalhes">Detalhes</label>
            <input type="text" class="form-control{{$errors->has('detalhes') ? ' is-invalid':''}}" value="{{ $product->detalhes}}" id="detalhes" name="detalhes">
            <div class="invalid-feedback">{{ $errors->first('detalhes') }}</div>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control{{$errors->has('categoria') ? ' is-invalid':''}}" value="{{ $product->categoria}}" id="categoria" name="categoria">
            <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
        </div>
        <div class="form-group">
            <label for="img_path">Imagem</label>
            <input type="file" class="form-control{{$errors->has('img_path') ? ' is-invalid':''}}" value="{{ $product->img_path}}" id="img_path" name="img_path" required>
            <div class="invalid-feedback">{{ $errors->first('img_path') }}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">
             Atualizar
            </button>
        </div>


      </form>
  </div>



@endsection 