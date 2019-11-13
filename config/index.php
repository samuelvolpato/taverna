<?php

 include "conexao.php";

 $query = $db->prepare("INSERT INTO usuarios (nome,email,senha,data_nascimento,genero,telefone,cpf) VALUES ('Bruno','br@mail.com','1515','1995-02-02','masculino','11999999999','34434434344') ");
 
 $query->execute();













?>