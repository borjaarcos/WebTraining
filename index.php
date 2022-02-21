<?php
session_start();

$action = $_GET['action'] ?? null;

switch ($action){
    case 'categories':
        require __DIR__.'/resource_category_list.php';
        break;
    case 'productes':
        require __DIR__.'/resource_listar_productes.php';
        break;
    case 'producte':
        require __DIR__.'/resource_detalle_productes.php';
        break;
    case 'modificar':
        require(__DIR__.'/resource_loadModifyData.php');
        break;
    case 'clickmodificar':
        require(__DIR__.'/resource_fillModifyData.php');
        break;
    case 'afegirCarret':
        require(__DIR__.'/resource_addToCart.php');
        break;
    case 'resumedCart':
        require(__DIR__.'/resource_resumedCart.php');
        break;
    case 'checkout':
        require(__DIR__.'/resource_checkout.php');
        break;
    case 'misPedidos':
        require(__DIR__.'/resource_llistarComandes.php');
        break;
    case 'buidar':
        require(__DIR__.'/resource_buidarCarret.php');
        break;
    case 'logout':
        require(__DIR__.'/resource_logout.php');
        break;
    case 'delete':
        require(__DIR__.'/resource_deleteItemCart.php');
        break;


    default:
        require __DIR__ .'/resource_listar_portada.php';
        break;
}

?>


