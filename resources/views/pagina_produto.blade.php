@extends('layouts.app')
@section('content')

 
<div class="row">
        <!-- <div class="col">
          <img src="img\controle_switch01.jpg" alt="">
        </div> -->
        <div class="col-md">
          <div id="carouselExampleControls" class="carousel slide border rounded" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url($product->avatar_image)}}" alt="Primeiro Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ url($product->avatar_image)}}" alt="Segundo Slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span aria-hidden="true"><i class="fas fa-arrow-alt-circle-left"></i></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span aria-hidden="true"><i class="fas fa-arrow-alt-circle-right"></i></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>
  
        <div class="card col cardProduto">
          <div class="card-body">
            <div class="card-title">{{ $product->descricao}}</div>
            <div class="product-bottom text-white text-left">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
            </div>
  
            <div class="card-text codigoProduto">{{ $product->codigo}}</div>
  
            <div class="text-center">
              <span class="text-white">{{ $product->fabricante}} </span> <img src="{{ asset('img\loja_exemplo_logo_fundo.jpg') }}" width="48px"><a
                href="gameplay_loja.php"> GamePlay</a>
            </div>
  
            <div class="card-text text-white">{{ $product->descricao}}</div>
  
            <div class="card-text  text-right precoAntigo"> R${{ $product->preco}}</div>
            <div class="card-text  text-right text-white descontoPreco">(12% de desconto!)</div>
            <div class="card-text precoProduto text-right"></div>
  
            <div class="text-right">
              <button class="btn btn-dark btnComprar"><i class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
  
            <div class="d-flex justify-content-center mt-2">
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modalParcelas">formas
                de parcelamento</button>
            </div>
  
            <form class="form-inline d-flex justify-content-start mt-2 row">
              <div class="form-group mx-sm-3 mb-2">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Preencha seu CEP">
              </div>
              <button type="submit" class="btn btn-outline-light mb-2"><i class="fas fa-truck"></i> Calcular
                Frete</button>
            </form>
  
            <!-- MODAL -->
            <div class="modal fade" id="modalParcelas" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Formas de Parcelamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                        class="far fa-times-circle"></i></button>
                  </div>
                  <div class="modal-body">
                    <i class="fas fa-credit-card"></i> Pagamentos com Cartão de Crédito
                  </div>
                  <table class="table mt-4">
                    <tbody>
                      <tr>
                        <th scope="row">1x</th>
                        <td>de R$219,99</td>
                        <td>sem juros</td>
                        <td>total R$219,99</td>
                      </tr>
                      <tr>
                        <th scope="row">2x</th>
                        <td>de R$124,99</td>
                        <td>sem juros</td>
                        <td>total R$249,99</td>
                      </tr>
                      <tr>
                        <th scope="row">3x</th>
                        <td>de R$83,33</td>
                        <td>sem juros</td>
                        <td>total R$249,99</td>
                      </tr>
                      <tr>
                        <th scope="row">4x</th>
                        <td>de R$83,33</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$264,46</td>
                      </tr>
                      <tr>
                        <th scope="row">5x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$267,42</td>
                      </tr>
                      <tr>
                        <th scope="row">6x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$270,40</td>
                      </tr>
                      <tr>
                        <th scope="row">7x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$273,40</td>
                      </tr>
                      <tr>
                        <th scope="row">8x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$276,43</td>
                      </tr>
                      <tr>
                        <th scope="row">9x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$279,47</td>
                      </tr>
                      <tr>
                        <th scope="row">10x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$282,54</td>
                      </tr>
                      <tr>
                        <th scope="row">11x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 1,69% a.m.</td>
                        <td>total R$276,04</td>
                      </tr>
                      <tr>
                        <th scope="row">12x</th>
                        <td>de R$219,99</td>
                        <td>com juros de 2,29% a.m.</td>
                        <td>total R$288,74</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- MODAL -->
  
            </div>
          </div>
        </div>
      </div>
  
      <!-- ACORDEÃO/DESCRIÇÃO DO PRODUTO -->
  
      <div class="accordion mt-5" id="infoProduto">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link btn-outline-light btn-block btnInfoProduto" type="button" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Informações do Produto
              </button>
            </h5>
          </div>
  
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#infoProduto">
            <div class="card-body text-white">
              Este controle da PowerA conta com um desempenho ótimo, possui alças de toque suave para maior conforto e 6
              tampas analógicas intercambiáveis para preferência pessoal. Conta com um design incrível com animação do
              Zelda: Breath of The Wild. Garanta já o seu na nossa loja.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link btn-outline-light btn-block btnInfoProduto collapsed" type="button"
                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Ficha Técnica
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#infoProduto">
            <div class="card-body">
              <table class="table mt-4 tableFicha">
                <tbody>
                  <tr>
                    <th scope="row">Código</th>
                    <td>86144985</td>
                  </tr>
                  <tr>
                    <th scope="row">Modelo</th>
                    <td>Zelda: Breath of The Wild</td>
                  </tr>
                  <tr>
                    <th scope="row">Plataforma</th>
                    <td>Nintendo Switch</td>
                  </tr>
                  <tr>
                    <th scope="row">Conexão</th>
                    <td>Wired</td>
                  </tr>
                  <tr>
                    <th scope="row">Fabricante</th>
                    <td>PowerA</td>
                  </tr>
                  <tr>
                    <th scope="row">Entrada</th>
                    <td>USB</td>
                  </tr>
                  <tr>
                    <th scope="row">Peso</th>
                    <td>50.5</td>
                  </tr>
                  <tr>
                    <th scope="row">Cor</th>
                    <td>Preto</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      <!-- CAROUSEL/OUTROS PRODUTOS -->
  
      <h2 class="text-white text-left my-5">veja estes produtos também!</h2>
  
      <div class="container-fluid">
  
        <div id="carouselOutrosProdutos" class="carousel slide" data-ride="carousel">
  
          <div class="carousel-inner row w-100 mx-auto">
  
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
  
                  <div class="col-sm-12 col-lg-4">
                    <div class="card cardCarousel border border-light" style="width: 200px;">
                      <a href=""><img class="card-img-top" src="{{ asset('img\mouse_pad02.jpg') }}" alt="Mouse Pad Gamer"></a>
                      <div class="card-body">
                        <div href="" class="card-text text-center text-white">Mouse Pad Gamer Hyperx Tamanho M 30cm X 36cm
                        </div>
                        <div class="card-text text-center text-white mt-2 font-weight-bold">23 ofertas a partir de</div>
                        <div class="card-text precoProduto text-center">R$:57,99</div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-sm-12 col-lg-4">
                    <div class="card cardCarousel border border-light" style="width: 200px;">
                      <a href=""><img class="card-img-top" src="{{ asset('img\monitor_gamer.jpg') }}"
                          alt="Monitor Gamer Led Ultrawide"></a>
                      <div class="card-body">
                        <div href="" class="card-text text-center text-white">Monitor Gamer Led Ultrawide</div>
                        <div class="card-text text-center text-white mt-2 font-weight-bold">28 ofertas a partir de</div>
                        <div class="card-text precoProduto text-center">R$:692,90</div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-sm-12 col-lg-4">
                    <div class="card cardCarousel border border-light" style="width: 200px;">
                      <a href=""><img class="card-img-top" src="{{ asset('img\fonte_pc.jpg') }}" alt="Fonte ATX 1050W Gamemax"></a>
                      <div class="card-body">
                        <div href="" class="card-text text-center text-white">Fonte ATX 1050W Gamemax GM1050 Semi Modular
                        </div>
                        <div class="card-text text-center text-white mt-2 font-weight-bold">20 ofertas a partir de</div>
                        <div class="card-text precoProduto text-center">R$:527,66</div>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
  
            <div class="carousel-item">
              <div class="container">
                <div class="row">
  
                  <div class="col-sm-12 col-lg-4">
                    <div class="card cardCarousel border border-light" style="width: 200px;">
                      <a href=""><img class="card-img-top" src="{{ asset('img\volante_switch.jpg') }}"
                          alt="Volante Wheel Mario Kart"></a>
                      <div class="card-body">
                        <div href="" class="card-text text-center text-white">Volante Wheel Mario Kart 8 Nintendo Switch -
                          Par</div>
                        <div class="card-text text-center text-white mt-2 font-weight-bold">3 ofertas a partir de</div>
                        <div class="card-text precoProduto text-center">R$:32,00</div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-sm-12 col-lg-4">
                    <div class="card cardCarousel border border-light" style="width: 200px;">
                      <a href=""><img class="card-img-top" src="{{ asset('img\cadeira_gamer.jpg') }}" alt="Cadeira Gamer"></a>
                      <div class="card-body">
                        <div href="" class="card-text text-center text-white">Cadeira Gamer Profissional</div>
                        <div class="card-text text-center text-white mt-2 font-weight-bold">23 ofertas a partir de</div>
                        <div class="card-text precoProduto text-center">R$:783,40</div>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
  
  
          </div>
          <a class="carousel-control-prev" href="#carouselOutrosProdutos" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselOutrosProdutos" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
  
      </div>
  
  
  
  
  
  
  
  


@endsection