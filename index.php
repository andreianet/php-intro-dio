<?php

$category = [];
$category[] = 'infantil';
$category[] = 'adolescente';
$category[] = 'adulto';
$category[] = 'idoso';
//print_r($category);

$nome = 'Andreia';
$idade = 30;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i=0;$i <= count($category); $i++){

        if($category[$i] == 'infantil')
            echo "A nadadora " .$nome. " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i=0;$i <= count($category); $i++){

        if($category[$i] == 'adolescente')
            echo "A nadadora " . $nome. " compete na categoria adolescente";
    }
}
else{
    for($i=0;$i <= count($category); $i++){

        if($category[$i] == 'adulto')
            echo "A nadadora " . $nome. " compete na categoria adulto";
    }
}
?>