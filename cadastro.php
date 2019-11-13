<html>
<?php $pageTitle = "Cadastrar";?>    
    <?php include_once('utils\head.php');?>
    <body>
        <main class="container-fluid">

            <div class="sticky-top">
                <?php include_once('utils\header.php');?>
            </div>


            
            <div class="container mt-3 p-0 ">

                <div class="row p-0 mx-0 mb-3 justify-content-center">                
                    <h1 class="text-white">Cadastre-se</h1>                  
                </div>

                <div class="row p-0 m-0 justify-content-center">
                    
                    <form class="border border-light rounded px-5 pt-3" action="">

                        <div class="container mb-3">
                            <button class="col btn btnPadrao" type="submit">Crie uma conta rápido e fácil com o <i class="fab fa-facebook-square"></i></button>
                        </div>
                        <div class="container mb-3">
                            <button class="col btn btnPadrao" type="submit">Crie uma conta rápido e fácil com o <i class="fab fa-google"></i></button>
                        </div>
                        <div class="row text-center">
                            <p class="col text-white">ou preencha o formulário abaixo</p>
                        </div>

                        <div class="form-group p-0 m-0">              
                            <div class="col form-group">
                                <label for="email" class="text-white">E-mail</label>
                                <input type="email" name="email" id="email" placeholder="Ex. joaodasilva@gmail.com" class="form-control form-control-lg bg-transparent" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col-8 form-group">
                                <label for="password" class="text-white">Senha</label>
                                <input type="password" name="senha" id="password" class="form-control form-control-lg bg-transparent" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col-8 form-group">
                                <label for="cpf" class="text-white">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control form-control-lg bg-transparent" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col form-group">
                                <label for="nome" class="text-white">Seu Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control form-control-lg bg-transparent" placeholder="Ex. João" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col-9 form-group">
                                <label for="dataNascimento" class="text-white">Data de Nascimento</label>
                                <input type="date" name="data_nascimento" id="dataNascimento" class="form-control form-control-lg bg-transparent" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">
                            <div class="container m-0 text-left">
                                <label for="sexo" class="text-white">Sexo</label>
                            </div>
                            <div class="container m-0" id="sexo">                    
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="masculino">
                                    <label class="form-check-label text-white" for="inlineRadio1">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="feminino">
                                    <label class="form-check-label text-white" for="inlineRadio2">Feminino</label>
                                </div>            
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">              
                            <div class="col-9 form-group">
                                <label for="telefone" class="text-white">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control form-control-lg bg-transparent" placeholder="Ex. (99) 99999-9999" required>
                            </div>
                        </div>
            
                        <div class="form-group p-0 m-0">
                            <div class="container m-0">                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineRadio1" value="notificacaoWhats">
                                    <label class="form-check-label text-white" for="inlineRadio1">
                                        Receber notificações pelo Whatsapp<button type="button" class="btn btnPadrao border-0" data-toggle="tooltip" data-placement="right" title="Você receberá uma mensagem a cada atualização do seu pedido, desde a confirmação de compra até a entrega.">
                                            <i class="fas fa-question-circle"></i>
                                        </button>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineRadio2" value="ofertasEmail">
                                    <label class="form-check-label text-white" for="inlineRadio2">Desejo receber ofertas por e-mail</label>
                                </div>            
                            </div>                 
                        </div>
                        <div class="container mx-0 mt-4">
                            <button class="col btn btnPadrao" type="submit">Criar o seu cadastro</button>
                        </div>
        
                        <div class="container mx-0 my-4">                        
                            <span class="text-white">
                                Já tem um cadastro? <a href="login.php" class="border-0 text-white efeitoLink">Entrar</a>
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