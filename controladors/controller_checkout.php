<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
require __DIR__.'/../modelo/modifySession.php';
require __DIR__.'/../modelo/checkout.php';
insertComanda();
deleteSessions();


require __DIR__.'/../vistes/checkout.php';