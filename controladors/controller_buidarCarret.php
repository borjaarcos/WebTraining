<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
require __DIR__.'/../modelo/modifySession.php';

deleteSessions();


require __DIR__.'/../vistes/resumedCart.php';