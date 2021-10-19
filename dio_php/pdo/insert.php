<?php

declare(strict_types=1);

$pdo = require('connect.php');
$sql = 'insert into produtos(descricao)values(?)';

$prepare = $pdo->prepare($sql); //prepara um estado antes 

$prepare->bindParam(1, $_GET['descricao']); //Na url:hpdo/insert.php?descricao=Produto01
$prepare->execute(); //executa de fato o SQL

echo $prepare->rowCount();
?>

