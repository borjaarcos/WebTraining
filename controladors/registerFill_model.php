<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
require __DIR__.'/../modelo/registre.php';
$page = register();
//Redirección segun si ha insertado o no al usuario
if($page == true){
    require __DIR__.'/../vistes/portada.php';
}
else{
    require __DIR__.'/../vistes/badDatType.php';
}