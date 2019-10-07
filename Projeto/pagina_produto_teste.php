<!DOCTYPE html>
<html lang="pt-BR">
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Taverna</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link async defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/estilo.css"/>
  <!-- Link de logo no title  -->
  <link rel="icon" href="img/favicon_taverna_48x48.png" sizes="96x96" type="image/png">

  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

 <?php require_once("../inc/header.php") ?>
   
 <main>
 
     <section class="produto_teste d-flex justify-content-around container flex-wrap">
         <article class="row">
            <div><img src="img/controle_switch01.jpg" alt="controle_switch01" width="300"></div>


         </article>
         <article class="form-produto-teste row align-items-center">
             <form action="" class="formulario-teste" method="POST">
             <label for=""><h3>Descrição do produto</h3></label><br>
             <p>Preço R$ XXXX</p><br>
             <label for="quantidade">Quantidade</label><br>
              <input class="form-control" type="number" name="quantidade" id="quantidade"><br>
             <!-- <button type="submit">Comprar</button>  -->
             <button  class="btn btn-dark btnComprar  mb-2"><i class="fas fa-shopping-cart"></i> Comprar</button> <br> 
             <input type="number" placeholder="Digite o CEP"><br>
             <button type="submit" class="btn btn-dark mt-2 mb-2"><i class="fas fa-truck"></i> Calcular
              Frete</button>
             </form>

         </article>
     </section>
   
      <section class="produto_teste2">
          
      <h2 class="text-white d-flex justify-content my-5">veja estes produtos também!</h2>

<div class="container-fluid">

  <div id="carouselOutrosProdutos" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner row w-100 mx-auto">

      <div class="carousel-item active">
        <div class="container">
          <div class="row">

            <div class="col-sm-12 col-lg-4">
              <div class="card cardCarousel border border-light" style="width: 200px;">
                <a href=""><img class="card-img-top" src="img\mouse_pad02.jpg" alt="Mouse Pad Gamer"></a>
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
                <a href=""><img class="card-img-top" src="img\monitor_gamer.jpg"
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
                <a href=""><img class="card-img-top" src="img\fonte_pc.jpg" alt="Fonte ATX 1050W Gamemax"></a>
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
                <a href=""><img class="card-img-top" src="img\volante_switch.jpg"
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
                <a href=""><img class="card-img-top" src="img\cadeira_gamer.jpg" alt="Cadeira Gamer"></a>
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

   






      </section>

   </main>



</body>

<?php require_once('../inc/footer.php') ?>
</html>