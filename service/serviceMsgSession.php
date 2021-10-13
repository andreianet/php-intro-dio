<?php

session_start();

function setarMsgError(string $msg) : void
{
    $_SESSION['msg-of-error'] = $msg;
}
function obterMsgError() : ?string // esse método pode retornar string ou null
{
    if (isset($_SESSION['msg-of-error'])) 
       return $_SESSION['msg-of-error'];
    return null;
}

function setarMsgSuccess(string $msg) : void
{
    $_SESSION['msg-of-sucess'] = $msg;
}
function obterMsgSuccess() : ?string // esse método pode retornar string ou null
{
    if (isset($_SESSION['msg-of-sucess'])) 
       return $_SESSION['msg-of-sucess'];
    return null;
}
//elimina dados da sessões
function removerMsgSuccess() : void
{
    if (isset($_SESSION['msg-of-success'])) 
        unset($_SESSION['msg-of-success']);
    
}
function removerMsgError() : void
{
    if (isset($_SESSION['msg-of-error'])) 
        unset($_SESSION['msg-of-error']);
}


?>