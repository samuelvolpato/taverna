<?php require_once("inc/head.php") ?>

<body>
  <?php require_once("inc/header.php") ?>
  <main>

    <div class="div-1">
      <a href="" class="link">
        <h2 id="selecionado" class="entrar">Entrar</h2>
      </a>
      <a href="cadastro.php" class="link">
        <h2 class="entrar"> Cadastrar</h2>
      </a>
    </div>

    <div class="botoes">
      <button type="button" class="btn btn-danger botoes-1"> Entrar com facebook</button>
      <button type="button" class="btn btn-danger botoes-1"> Entrar com google</button>
    </div>
    <div class="div-form">
      <form action="">

        <label for="email" class="labels">Email</label><br>
        <input type="text" name="email" id="email" required placeholder="mail@mail.com"><br>

        <label for="Senha" class="labels">Senha</label><br>
        <input type="password" name="senha" id="senha" required><br>

        <button type="submit" class="btn btn-primary enviar-btn">Enviar</button>

      </form>
    </div>
  </main>
<?php require_once("inc/footer.php");?>
</body>

</html>