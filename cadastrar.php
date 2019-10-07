<html>    
    <?php include_once('utils\head.php');?>
    <body>
        <main class="container-fluid">

            <div class="sticky-top">
                <?php include_once('utils\header.php');?>
            </div>

            <div class="row p-0 m-0 justify-content-center">                
                <h1 class="text-white">Cadastre-se</h1>
            </div>
            
                <form class="justify-content-center" action="">                
                    <div class="form-group p-0 m-0">              
                        <div class="col-10 col-md-4 form-group">
                            <label for="email" class="text-white">E-mail</label>
                            <input type="email" id="email" placeholder="Ex. joaodasilva@gmail.com" class="form-control form-control-lg bg-transparent">
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">              
                        <div class="col-8 col-md-2 form-group">
                            <label for="senha" class="text-white">Senha</label>
                            <input type="password" id="password" class="form-control form-control-lg bg-transparent">
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">              
                        <div class="col-8 col-md-2 form-group">
                            <label for="cpf" class="text-white">CPF</label>
                            <input type="text" id="cpf" class="form-control form-control-lg bg-transparent">
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">              
                        <div class="col-10 col-md-4 form-group">
                            <label for="nome" class="text-white">Seu Nome</label>
                            <input type="text" id="nome" class="form-control form-control-lg bg-transparent" placeholder="Ex. João">
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">              
                        <div class="col-10 col-md-2 form-group">
                            <label for="dataNascimento" class="text-white">Data de Nascimento</label>
                            <input type="date" id="dataNascimento" class="form-control form-control-lg bg-transparent" placeholder="Ex. João">
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">
                        <div class="container m-0 text-left">
                            <label for="sexo" class="text-white">Sexo</label>
                        </div>
                        <div class="container m-0" id="sexo">                    
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="masculino">
                                <label class="form-check-label text-white" for="inlineRadio1">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="feminino">
                                <label class="form-check-label text-white" for="inlineRadio2">Feminino</label>
                            </div>            
                        </div>
                    </div>
        
                    <div class="form-group p-0 m-0">              
                        <div class="col-9 col-md-2 form-group">
                            <label for="telefone" class="text-white">Telefone</label>
                            <input type="text" id="telefone" class="form-control form-control-lg bg-transparent" placeholder="Ex. (99) 99999-9999">
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
                        <button class="btn btnPadrao" type="submit">Criar o seu cadastro</button>
                    </div>

                    <div class="container mx-0 my-4">                        
                        <span class="text-white">
                            Já tem um cadastro? <a href="index_teste.php" class="btn btnPadrao border-0 text-white efeitoLink">Entrar</a>
                        </span>
                    </div>
                </form>


            



            



            

        </main>
        <script>
        // <!-- Init tooltips         -->
        $('[data-toggle="tooltip"]').tooltip();
        </script>
    </body>
<?php include_once('utils\footer.php');?>
</html>