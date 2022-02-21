<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
require __DIR__.'/../modelo/addToCart.php';
$page = afegiralCarret($_GET['product_id']);

require __DIR__.'/../vistes/nav.php';