

<div class="detall">
       
            <?php foreach ($productId as $category): ?>
            
        <h3 id="cat" class="cat<?php echo $category['id']?> " href="#"><?php echo $category['nom']?>
            
               </h3>
                <img width="400" height="400" src="<?php echo $category['img']?>">
   <p> <?php echo $category['descripcio']?></p>
    <p>Precio: <?php echo $category['preu']?></p>
            <div id="Afegir" class="cat<?php echo $category['id']?> ">
                <button>Afegir
                </button>
            </div>
                <?php endforeach; ?>
</div>
    
