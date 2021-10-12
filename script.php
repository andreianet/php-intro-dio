<?php

session_start();

$category = [];
$category[] = 'infantil';
$category[] = 'adolescente';
$category[] = 'adulto';
$category[] = 'idoso';
//print_r($category);

$name = $_POST['name']; //&_GET
$age =  $_POST['age'];

//var_dump($name);
//var_dump($age);
//return 0;

//verificar se está vazio
if(empty($name)){
    //echo 'O campo nome não pode estar vazio!';
    $_SESSION['msg-of-error'] = 'O campo nome não pode estar vazio!';
    header('location: index.php');
    return;
}
//contar caracteres
else if(strlen($name) < 3)
{
    $_SESSION['msg-of-error'] = 'O nome deve conter mais de três caracteres!';
    header('location: index.php');
    return;
}
//qtde máxima
else if(strlen($name) > 40){
    $_SESSION['msg-of-error'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}
//verifica se não for numérico
else if(!is_numeric($age)){
    $_SESSION['msg-of-error'] = 'Informe um número para Idade';
    header('location: index.php');
    return;
}

if($age >= 6 && $age <= 12)
{
    for($i=0; $i <= count($category); $i++){
        if($category[$i] == 'infantil')
        $_SESSION['msg-of-sucess'] = "A nadadora " .$name . " compete na categoria " .$category[$i];
        header('location: index.php');
        return;
          
    }
}
else if($age >= 13 && $age <= 18)
{
    for($i=0;$i <= count($category); $i++){
        if($category[$i] == 'adolescente')
        $_SESSION['msg-of-sucess'] = "A nadadora " . $name. " compete na categoria " .$category[$i];
        header('location: index.php');
        return;
    }
}
else{
    for($i=0; $i <= count($category); $i++){
        if($category[$i] == 'adulto')
        $_SESSION['msg-of-sucess'] = "A nadadora " . $name. " compete na categoria " .$category[$i];
        header('location: index.php');
        return;
    }
}
?>