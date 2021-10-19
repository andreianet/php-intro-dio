<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) { //na url: pdo/src/?operacao=list

    case 'list':

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;
    
    case 'insert':

        $status = $produto->insert('Produto Novo 002'); //$_GET['descricao']

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;

    case 'update':

        $status = $produto->update("Produto01 Alterado",1);//$_GET['descricao'], $_GET['id']);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;

    case 'delete':

        $status = $produto->delete(4);//$_GET['id']);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro removido com sucesso!";

        break;
    
}

