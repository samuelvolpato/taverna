<?php require_once("inc/head.php") ?>
<body>
<?php require_once("inc/header.php") ?>
    <main>

        <div class="div-1">
          <a href="login.php" class="link"><h2 class="entrar">Entrar</h2></a>
          <a href="cadastro.php" class="link"><h2 id="selecionado" class="entrar">  Cadastrar</h2></a>
        </div>
        
        <div class="div-form">
          <form action="">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="confirme-email">Confirme o email:</label><br>
            <input type="email" name="confirme-email" id="confirme-email" required><br>
         
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br>

            <label for="nome-usuario">Nome do usuário:</label><br>
            <input type="text" id="nome-usuario" id="nome-usuario" required><br>

            <label for="termo-condicao">Termos de condição:</label><br>

             <label for="idade-condicao">
                 <input type="checkbox" name="termo-condicao" value="idade-condicao" id="idade-condicao" required> Confirmo ser maior de 16 anos
             </label><br>
             <label for="notificacao-email">
                <input type="checkbox" name="termo-condicao" value="notificacao-email" id="notificacao-email" > Concordo em fornecer meu email para o site Taverna e receber notificações via email
            </label><br>


            <button type="submit" class="btn btn-primary">OK</button>


          </form>
        </div>
    </main>
  <?php require_once("inc/footer.php") ?>
  </body>
</html>