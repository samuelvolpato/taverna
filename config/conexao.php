<?php

 $host = "mysql:host=localhost;dbname=taverna;port=3306";
 $user = "root";
 $pass = "";

//  criando a conexao php com mysql 

try {
    $db = new PDO($host,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexão feita com sucesso cuzao!";

} catch (PDOException $e) {
    echo "Não foi possível realizar a conexão do banco!"."<br>";
    echo $e->getMessage();
    exit;
}

//como funciona uma conexao PDO. há um recurso para erros que utiliza o PDOExceptions estaraõ dentro da $e
// por meio da setattribute estamos verificando se há algum erro do mysql 

$db = new PDO($host,$user,$pass);

// var_dump($db);


?>
