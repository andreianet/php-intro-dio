<?php

function validarUser(array $user)
{
    if (empty($user['codigo']) && empty($user['name']) || empty($user['age'])) {
        return false;
    }
    return true;
}

$user = [
$codigo = 1,
$name = '',
$age = 57,
];

$userValido = validarUser($user);

if (!$userValido) {
    echo "Usuário Inválido";
    return false;
}
echo "\n... executando ...\n";

?>