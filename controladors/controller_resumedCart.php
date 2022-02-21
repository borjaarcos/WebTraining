<?php

require_once __DIR__.'/../modelo/producte.php';
require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
$productes = array();
if($_SESSION['qtyCarret_usuari']!=0){
foreach ($_SESSION['carret'] as $id):
    $productId = getProducteById($id);
    array_push($productes,$productId);
endforeach;}

require __DIR__.'/../vistes/resumedCart.php';

?>