@extends('layouts.app')
@section('pagina_titulo', 'Cadastro')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header"> {{ __('Cadastro') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Insira o seu nome completo">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Insira o seu email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie a sua senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a sua senha">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control" name="cep" required autocomplete="new-password" value="{{ old('cep') }}" placeholder="Insira o seu CEP" data-mask="00000-000">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="new-password" value="{{ old('address') }}" placeholder="Insira o seu endereço">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control" name="telephone" required autocomplete="new-password" data-mask="(00) 00000-0000"  value="{{ old('telephone') }}" placeholder="Favor, incluir ddd">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right" data-mask="">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" required autocomplete="new-password" data-mask="000.000.000-00"  value="{{ old('cpf') }}" placeholder="Informe o seu CPF">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right" >{{ __('Data de Nascimento') }}</label>
                            

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control date" name="birthday" required autocomplete="new-password" data-mask="00/00/0000" value="{{ old('birthday') }}" placeholder="Informe sua data de nascimento">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="gender_male">
                                <label class="form-check-label" for="gender_male">{{ __('Masculino') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="gender_female">
                                <label class="form-check-label" for="gender_female">{{ __('Feminino') }}</label>
                            </div>
                        </div>
                        
                        
                            


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnPadrao">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection