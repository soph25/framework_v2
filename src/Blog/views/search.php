<?php $this->insert('partials/header') ?>


 <h3><a href="<?= $router->generateUri('blog.index'); ?>">recherche par domaines</a>  </h3>
 
    <?php foreach ($posts as $post) : ?>

   
   
            
             <p class="card-text">
                <?= $post->Fortitre; ?></br>
				<?= $post->FORtype; ?></br>
				<a href="<?= $post->Forurletidonisep; ?>" class="btn btn-danger">
                <?= $post->Forurletidonisep; ?></a>
              </p>
           
    
              <p class="text-muted"><?=$post->Lieudenseignement?>--<?=$post->ENScodepostal?></p>
         
         
              <p><a href="<?= $post->Ensurletidonisep; ?>" class="btn btn-primary">
                <?= $post->Ensurletidonisep; ?>
              </a></p>-----------------------
		
  

    <?php endforeach; ?>





<?php $this->insert('partials/footer') ?>


