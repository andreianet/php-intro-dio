<?php

function validarUser(array $user)
{
    if (empty($user['codigo']) && empty($user['name']) || empty($user['age'])) {
        throw new Exception('Campos obrigatórios não foram preenchidos!\n');
    }
    return true;
}

$user = [
$codigo = 1,
$name = '',
$age = 57,
];



try {
    $status = validarUser($user);   
}catch(Exception $e) {
    echo $e->getMessage();
    die(); //
}
echo "\n... executando ...\n";

?>