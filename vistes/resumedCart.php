<?php require __DIR__.'/skeletonPortada.php';?>
<h2>Mi carrito</h2>
<?php if($_SESSION['qtyCarret_usuari']!=0 ){?>
<div id="resume" class="resumedProducts">

    <?php foreach ($productes as $producte):

            foreach ($producte as $productInfo):?>
            <div class="checkProduct">
                <h3><?php echo $productInfo['nom']?></h3>
                <img width="100" height="100" src="<?php echo $productInfo['img']?>">
                <p>Precio: <?php echo $productInfo['preu']?></p>
                <div id="deleteButton" class="prod<?php echo $productInfo['id']?>">
                    <button>X
                    </button>
                </div>
            </div>
                <?php endforeach;
     endforeach; ?>

<div class="buttonsCheck">
<a href="index.php?action=checkout">
    <button>Comprar</button>
</a>
<a href="index.php?action=buidar">
    <button>Vaciar carrito</button>
</a>
</div>
</div>
<?php }else{?>
<h3>No tienes productos en la cesta actualmente.</h3>
<?php }?>
