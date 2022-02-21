<?php

require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();

require __DIR__.'/../vistes/showUserRegisterForm.php';