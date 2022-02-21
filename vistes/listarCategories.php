
<div id="cats">
        <?php foreach ($categories as $category): ?>
            
        <a id="cat" class="cat<?php echo $category['id']?> " href="#"><?php echo $category['nom']?>
               </a>
        <?php endforeach; ?>
    
    
</div>

