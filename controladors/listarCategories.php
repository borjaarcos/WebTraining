<?php

require_once __DIR__.'/../modelo/categories.php';
require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
$categories = getCategories();

require __DIR__.'/../vistes/listarCategories.php';

