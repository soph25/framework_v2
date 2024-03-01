<?php $this->insert('partials/header') ?>

<ul>
   
    <li <?=$this->uri('/domaines', 'class="selected"')?>><a href="/domaines">domaines</a></li>
    
</ul>

<?php echo $$post; ?>


<?php $this->insert('partials/footer') ?>
