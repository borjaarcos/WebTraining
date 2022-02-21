<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Tienda de TDIW </title>
    <link rel="stylesheet" type="text/css" href="css/portada.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>

</head>
<body>


<header>
    <nav id="header">
        <h1  class="title"> <a href="index.php">VidiUAB</a></h1>
        <ul class="nav">
            <?php if(!empty($_SESSION) ){?>
                <li class="principal"><a href="">Hola <?php echo $_SESSION['nom_usuari']?><span ></span></a>
                    <ul class="submenu">
                        <li><a href="index.php?action=modificar">Mis datos</a></li>
                        <li><a href="index.php?action=misPedidos">Mis pedidos</a></li>
                        <li><a href="index.php?action=logout">Cerrar sesión</a></li>
                    </ul>
                </li>
            <?php }?>
            <?php if(empty($_SESSION) ){?>
                <li><a href="resource_userRegister.php">Registro</a></li>
                <li><a href="resource_userLoginRedirect.php">Login</a></li>
            <?php }?>
        </ul>
        <?php if(!empty($_SESSION) ){?>
            <div class="trailer" >
                <a  class="trailer" href="index.php?action=resumedCart"><img src="img/cart.png"></a>
                <div id="tail">
                    <p>Precio:<?php echo $_SESSION['preuCarret_usuari']?></p>
                    <p>Cantidad:<?php echo $_SESSION['qtyCarret_usuari']?></p>
                </div>

            </div>
        <?php }?>
    </nav>
</header>
