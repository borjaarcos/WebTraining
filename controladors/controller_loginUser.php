<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
require __DIR__.'/../modelo/login.php';
$page = login();
//Redirección segun si ha insertado o no al usuario
if($page == true){
    header("Location: __DIR__.'/../index.php");
}
else{
    require __DIR__.'/../vistes/badDatType.php';
}