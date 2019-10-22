<html>
    <?php $pageTitle = "Login do Cliente";?>    
    <?php include_once('utils\head.php');?>
    <body>
        <main class="container-fluid">

            <div class="sticky-top">
                <?php include_once('utils\header.php');?>
            </div>


            
            <div class="container mt-3 p-0 ">

                <div class="row p-0 mx-0 mb-3 justify-content-center">                
                    <h1 class="text-white">Login do Cliente</h1>                  
                </div>

                <div class="row justify-content-center">
                    
                    <form class="border border-light rounded px-5 pt-3" action="">

                        <div class="form-group p-0 m-0">              
                            <div class="col form-group">
                                <label for="email" class="text-white">E-mail</label>
                                <input type="email" id="email" placeholder="Ex. joaodasilva@gmail.com" class="form-control form-control-lg bg-transparent">
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col form-group">
                                <label for="password" class="text-white">Senha no Taverna</label>
                                <input type="password" id="password" class="form-control form-control-lg bg-transparent">
                                <small id="emailHelp" class="form-text text-white efeitoLink"> <a href="" class="">Esqueci minha senha</a></small>
                            </div>
                        </div>
            
                        <div class="container mb-3">
                            <button class="col btn btnPadrao" type="submit">Continuar</button>
                        </div>

                        <div class="row text-center">
                            <p class="col text-white">ou</p>
                        </div>

                        <div class="container mb-3">
                            <button class="col btn btnPadrao" type="submit">Continuar com o <i class="fab fa-facebook-square"></i></button>
                        </div>
                        <div class="container mb-3">
                            <button class="col btn btnPadrao" type="submit">Continuar com o <i class="fab fa-google"></i></button>
                        </div>
        
                        <div class="container mx-0 my-4">                        
                            <span class="text-white">
                                Não tem cadastro? <a href="cadastro.php" class="border-0 text-white efeitoLink">Cadastre-se</a>
                            </span>
                        </div>
                    </form>
                </div>                
                
            </div>
            


            



            



            

        </main>
        <script>
        // <!-- Init tooltips         -->
        $('[data-toggle="tooltip"]').tooltip();
        </script>
    </body>
<?php include_once('utils\footer.php');?>
</html>