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
            <label for="preco">Preço</label>
            <input type="text" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" value="{{ $product->preco}}" id="preco" name="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">
             Atualizar
            </button>
        </div>


      </form>
  </div>



@endsection 