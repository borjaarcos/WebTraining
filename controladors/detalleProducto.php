<?php

require_once __DIR__.'/../modelo/detalleProducte.php';
require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();

$productId = getProducteById($_GET['product_id']);
require __DIR__.'/../vistes/detallProducte.php';

?>