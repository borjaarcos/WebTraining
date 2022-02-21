<?php

require_once __DIR__.'/../modelo/producte.php';
require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
$productes = getProducteByCategoryId($_GET['category_id']);
require __DIR__.'/../vistes/listarProductes.php';

?>