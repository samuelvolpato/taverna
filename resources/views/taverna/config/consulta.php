<?php


include "conexao.php";

$query = $db->prepare("SELECT * FROM usuarios");
$query->execute();


$result = $query->fetchAll(PDO::FETCH_ASSOC);


foreach ($result as $key => $value) {
    echo "<br>".$value['nome'];
}




// echo "<pre>";
// var_dump($result);
// echo "</pre>";

