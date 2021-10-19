<?php

declare(strict_types=1);

$pdo = require('connect.php');
$sql = 'delete from produtos where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']); //na url: /delete.php?id=3

$prepare->execute();

echo $prepare->rowCount();

?>