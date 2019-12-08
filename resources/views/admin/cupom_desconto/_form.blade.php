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
                <input type="text" class="form-control{{$errors->has('categoria') ? ' is-invalid' : ''}}" value="{{ old('categoria') }}" id="categoria" placeholder="Informe a categoria do produto" name="categoria">
                <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
            </div>
            <div class="form-group">
                <label for="preco" class="text-white efeitoLink">Preço</label>
                <input type="text" class="form-control{{$errors->has('preco') ? ' is-invalid' : ''}}" value="{{ old('preco') }}" id="preco" placeholder="Informe o preço" name="preco">
                <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
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
                <label for="Img" class="text-white efeitoLink">Imagens do Produto</label>
                <input type="file" id="Img" name="img_path">
            </div>
            <button class="btn btnPadrao" id="cadastrar">Cadastrar Produto</button>
        </form>
        
    </div>
            <div class="row justify-content-center mt-5">
                
                        <a class="btn btnPadrao col-5" id="cadastrar" href="{{ route('products-show')}}">Visualizar Produtos</a>
               
            </div>
</div>
