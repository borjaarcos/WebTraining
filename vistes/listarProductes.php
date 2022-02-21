

<div id="prods">
        <?php foreach ($productes as $producte): ?>
            
               <a id="prod" class="prod<?php echo $producte['id']?> " href="#"><?php echo $producte['nom']?>
               </a>
            
        <?php endforeach; ?>
</div>