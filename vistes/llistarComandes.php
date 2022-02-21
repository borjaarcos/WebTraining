<?php require __DIR__.'/skeletonPortada.php';?>
<head>
    <title> Tienda de TDIW </title>
    <link rel="stylesheet" type="text/css" href="css/comandes.css">
</head>
<h2>Mis pedidos</h2>
<div id="comandes">
    <?php

    $i=0;
    foreach ($comandes as $comanda):
        ?>
    <div class="comanda">
        <p>Realizada el <?php echo $comanda['data']?></p>

        <?php
        if(is_array($comanda)){
            foreach ($comanda as $producte):
                if(is_array($producte)){
                    ?>
                    <div class="product">
                        <p class="productName"><?php echo $producte['nom']?> <br>

                        </p>
                        <img width="400" height="400" src="<?php echo $producte['img']?>">
                        <p><?php echo $producte['descripcio']?><br>
                            Precio: <?php echo $producte['preu']?></p>
                    </div>
                <?php
                }
            endforeach;
        }
        ?>
        <p class="price">Precio total del pedido: <?php echo $comanda['preu_total']?></p>
    </div>
        <?php
        $i=$i+1;
     endforeach; ?>


</div>

<footer id="peu" style="grid-area: peu">

</footer>
</body>
</html>