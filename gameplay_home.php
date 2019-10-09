<html>
<?php $pageTitle = "Gameplay";?>
    <?php include_once('utils\head.php');?>
    
    <body>
        <?php include_once('utils\produtosCards.php');?>
    
        <main class="container-fluid ">
    
            <div class="sticky-top">
                <?php include_once('utils\header.php');?>
            </div>
    
 <!-- MENU LOJA MARKETPLACE -->

            <div class="container p-0 mt-3 menuLoja">
                <div class="nav p-0">
                    <div class="nav-item col-3 m-0 p-0 align-self-center">
                        <img src="assets\img\loja_exemplo_logo_fundo.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="nav-item col-3 mx-3 p-0 text-center">
                        <div class="row p-0 m-0" >
                            <span class="text-white col border-bottom" id="nota">4,7</span>
                        </div>
                        <div class="row p-0 m-0 justify-content-center ">
                            <ul class="d-flex flex-row flex-nowrap p-0 my-1 text-white">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="row p-0 m-0 justify-content-center" >
                            <span class="text-white" id="avaliacoes">215 avaliações</span>
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="row justify-content-center">
                            <button class="btn btnPadrao" data-toggle="modal" data-target="#modalInfoLoja">Mais informações</button>
                            
                            <div class="modal" id="modalInfoLoja">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white">Loja Gameplay</h5>
                                            <button class="close btn-lg border-0" data-dismiss="modal"><i class="fas fa-times"></i></button>    
                                        </div>
                                        <div class="modal-body text-white">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis architecto, repellat fuga inventore quis magnam, suscipit, pariatur aut assumenda deserunt vero voluptates labore corporis dicta rem facere tempora hic eos.
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure nemo eius dolorem ratione debitis, harum ducimus, ut, consectetur nihil iste eveniet incidunt? Provident dolore laborum ex aspernatur cupiditate earum numquam?
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste veniam consectetur ad! Voluptate aspernatur magnam assumenda tenetur facere temporibus adipisci quidem consectetur quasi illo deserunt, soluta totam! Ex, exercitationem libero.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa, voluptate autem dolorum, perferendis laudantium facilis necessitatibus in eaque dignissimos libero at nisi natus dolore minus quidem voluptatem, beatae debitis?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btnPadrao" data-dismiss="modal">Fechar</button>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                </div>
            </div>
    
    <!-- PRODUTOS DESTAQUE -->
    <div class="container my-4">
        <div class="row">
            <?php foreach ($produtosHomeLoja as $nomeProduto => $infosProduto) { ?>
                <div class="col-md-3 col-12 p-0 m-0 produtosHomeLoja mb-3">
                    <div class="container-fluid m-0 p-0">                        
                        <div class="row mx-2 p-0 justify-content-center overlayProduto" id="">
                            <img src="<?php echo $infosProduto[0]; ?>" class="img-fluid rounded "  title="<?php echo $infosProduto[1]; ?>">
                            <ul class="nav nav-pills border rounded" id="btnOverlayProduto">
                                <li class="nav-item my-3" title="Compartilhar"><button class="btn btnPadrao border-0 "><i class="fas fa-share-alt"></i></button></li>
                                <li class="nav-item my-3" title="Adicionar ao Carrinho"><button class="btn btnPadrao border-0 "><i class="fas fa-shopping-cart"></i></button></li>
                                <li class="nav-item my-3" title="Adicionar a Lista de Desejos"><button class="btn btnPadrao border-0 "><i class="fas fa-heart"></i></button></i></li>
                                <li class="nav-item my-3" title="Detalhes do Produto"><button class="btn btnPadrao border-0 "><i class="fas fa-info-circle"></i></button></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mx-0 mt-1 py-0 px-2 justify-content-center">
                        <h6 class="text-white"><?php echo $infosProduto[1]; ?></h6>
                    </div>
                    <div class="row m-0 p-0 justify-content-center align-self-center">
                        <ul class="d-flex flex-row flex-nowrap p-0 my-1 text-white">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>                    
                    </div>
                    <div class="row m-0 p-0 justify-content-center align-self-center">
                        <span class="text-white">R$ <?php echo $infosProduto[2]; ?></span>
                    </div>
                    <div class="row m-0 p-0 justify-content-center align-self-center">
                        <article class="text-white">ou em <?php echo $infosProduto[3]; ?>‬</article>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    
    
    
        </main>
    </body>
<?php include_once('utils\footer.php');?>
</html>