<?php

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
    echo 'O campo nome não pode estar vazio!';
    return;
}
//contar caracteres
if(strlen($name) < 3)
{
    echo 'O nome deve conter mais de três caracteres!';
    return;
}
//qtde máxima
if(strlen($name) > 40){
    echo 'O nome é muito extenso';
    return;
}
//verifica se não for numérico
if(!is_numeric($age)){
    echo "Informe um número para Idade";
    return;
}

if($age >= 6 && $age <= 12)
{
    for($i=0; $i <= count($category); $i++){

        if($category[$i] == 'infantil')
            echo "A nadadora " .$name . " compete na categoria " .$category[$i];
    }
}
else if($age >= 13 && $age <= 18)
{
    for($i=0;$i <= count($category); $i++){

        if($category[$i] == 'adolescente')
            echo "A nadadora " . $name. " compete na categoria " .$category[$i];
    }
}
else{
    for($i=0; $i <= count($category); $i++){

        if($category[$i] == 'adulto')
            echo "A nadadora " . $name. " compete na categoria " .$category[$i];
    }
}
?>