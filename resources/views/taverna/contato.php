@extends('layouts.app')

@section('content')
  <div class="div-form">
    <form action="">
      <label for="nome" class="label">Nome:</label><br>
      <input type="text" id="nome" name="nome"><br>

      <label for="email" class="label">Email:</label><br>
      <input type="email" id="email" name="email"><br>

      <label for="comentario" class="label">Comentário:</label><br>
      <textarea name="comentario" id="comentario" cols="30" rows="10" maxlength="100"></textarea><br>

      <button type="submit" class="btn btn-primary">Enviar comentário</button>
    </form>
  </div>
@endsection