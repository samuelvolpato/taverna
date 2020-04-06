@extends('layouts.app')
@section('pagina_titulo','Perfil')

@section('content')
<div class="container">
        <div class="card bg-dark text-white mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('img/img_marcacao.jpg') }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title"> {{ Auth::user()->name }}</h2>
                    <div class="row">
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <span class="form-control-static">{{ Auth::user()->name }}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">Email:</label>
                                    <span class="form-control-static">{{ $user->email }}</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">Endereço:</label>
                                    <span class="form-control-static">{{ User::find()->address }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">CEP:</label>
                                    <span class="form-control-static">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">Telefone:</label>
                                    <span class="form-control-static">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">CPF:</label>
                                    <span class="form-control-static">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="saudacao" class="control-label">Data de Nascimento:</label>
                                    <span class="form-control-static">{{ Auth::user()->email }}</span>
                                </div>
                                                                
                                <div class="form-group">
                                    <a href="/contacts">
                                        <button class="btn btn-primary">
                                            Voltar
                                        </button>
                                    </a>
                                </div>
                            </div>
                </div>
                </div>
            </div>
        </div>
</div>
@endsection