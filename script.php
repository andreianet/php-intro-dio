<?php

include"service/serviceMsgSession.php";
include"service/serviceValidate.php";
include"service/serviceCategory.php";

$name = $_POST['name']; 
$age =  $_POST['age'];

defineCategory($name, $age);
header('location:index.php');



?>