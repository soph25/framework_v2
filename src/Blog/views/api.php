<?php $this->insert('partials/header') ?>
<ul class="list-group">
<?php foreach ($posts as $post) : ?>
<li class="list-group-item"><?php echo $post['longTitle']; ?></li>
<li class="list-group-item"><?php echo $post['place']['city']; ?></li>
<li class="list-group-item"><?php echo $post['contact']['phone']; ?></li>
<li class="list-group-item"><?php echo $post['company']['name']; ?></li>
<li class="list-group-item"><?php echo $post['onisepUrl']; ?></li>
<?php foreach ($post['training']['sessions'] as $sess) : ?>
<?php foreach ($sess as $ses) : ?> 
<?php echo $ses; ?></br>
<?php endforeach; ?>
<?php endforeach; ?>

 <?php endforeach; ?>
</ul>

<?php $this->insert('partials/footer') ?>
