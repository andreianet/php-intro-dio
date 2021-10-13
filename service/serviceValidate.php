<?php

//declare(strict_types::'1');

function validaName(string $name) : bool
{
    //verificar se está vazio
    if(empty($name)){
        //echo 'O campo nome não pode estar vazio!';
        setarMsgError('O campo nome não pode estar vazio!');       
        return false;
    }
    //contar caracteres
    else if(strlen($name) < 3)
    {
        setarMsgError('O nome deve conter mais de três caracteres!');
        header('location: index.php');
        return false;
    }
    //qtde máxima
    else if(strlen($name) > 40){
        setarMsgError('O nome é muito extenso');
        header('location: index.php');
        return false;
    }
    return true;

}
function validaAge(string $age) : bool
{
    if(!is_numeric($age)){
        setarMsgError('Informe um número para Idade');       
        return false;
    }
    return true;
}

?>