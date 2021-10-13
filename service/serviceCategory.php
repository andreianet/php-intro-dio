<?php

function defineCategory(string $name, string $age) : ?string
{
    $category = [];
    $category[] = 'infantil';
    $category[] = 'adolescente';
    $category[] = 'adulto';
    $category[] = 'idoso';

    if(validaName($name) && validaAge($age))
    {
        removerMsgError();
        if($age >= 6 && $age <= 12)
    {
        for($i=0; $i <= count($category); $i++){
            if($category[$i] == 'infantil')
            {
                setarMsgSuccess("A nadadora " .$name . " compete na categoria " .$category[$i]);            
                return null;
            }
              
        }
    }
    else if($age >= 13 && $age <= 18)
    {
        for($i=0;$i <= count($category); $i++){
            if($category[$i] == 'adolescente')
            {
                setarMsgSuccess("A nadadora " . $name. " compete na categoria " .$category[$i]);           
                return null;
            }
        }
    }
    else{
        for($i=0; $i <= count($category); $i++){
            if($category[$i] == 'adulto')
            {
                setarMsgSuccess("A nadadora " . $name. " compete na categoria " .$category[$i]);            
                return null;
            }
        }
    }
    }
    else{
        removerMsgSuccess();
        return obterMsgError();
    }
}
?>