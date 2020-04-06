@extends('layouts.app')
@section('pagina_titulo', 'Contato')
@section('content')
  <div class="row div-form justify-content-center">
    <form action="">
      <label for="nome" class="text-white label">Nome:</label><br>
      <input type="text" id="nome" name="nome"><br>

      <label for="email" class="text-white label">Email:</label><br>
      <input type="email" id="email" name="email"><br>

      <label for="comentario" class="text-white label">Comentário:</label><br>
      <textarea name="comentario" id="comentario" cols="30" rows="10" maxlength="100"></textarea><br>

      <button type="submit" class="btn btn-primary">Enviar comentário</button>
    </form>
  </div>
@endsection