<?php

require_once __DIR__.'/../modelo/comandes.php';
require_once __DIR__.'/../modelo/connectaBD.php';

$connexio=connectaDb::getInstance();
$comandes=getComandaByUserId();
$producte=array();
foreach ($comandes as $comanda):
    foreach ($comanda as $detalls_comanda): ;
        if(is_array($detalls_comanda)){
            array_push($producte,$detalls_comanda);
        }
        endforeach;
endforeach;
require __DIR__.'/../vistes/llistarComandes.php';

?>