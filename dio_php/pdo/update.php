<?php

declare(strict_types=1);

$pdo = require('connect.php');
$sql = 'update produtos set descricao = ? where id =?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']); //url: pdo/update.php?descricao=Produto Teste Alterado&id=2
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();

?>