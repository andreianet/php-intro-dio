<?php

include"service/serviceMsgSession.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<p>Form For Inscription Competition</p>

<form action="script.php" method="post">
    <?php
        $msgSucess = obterMsgSuccess(); 
        if (!empty($msgSucess)) {
            echo 'Message of Sucess';
        }

        $msgError = obterMsgError();  
        if (!empty($msgError)) {
            echo 'Message of Error';
        }
    ?>
    <p>>Name: <input type="text" name="name" /></p>
    <p>>Age: <input type="text" name="age" /></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>
</body>



</html>