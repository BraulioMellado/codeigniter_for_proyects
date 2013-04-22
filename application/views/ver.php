
<article id="article">
	<section class="section">
	<?php foreach ($articulo as $campo) {?>

	<h2><a href="#"><?= ucfirst($campo->titulo); ?></a></h2>

	<p class="fech"><?= mdate("%d/%m/%Y",$campo->fech_up); ?></p>
	
	<p><?= $campo->publi; ?></p>
	
	<p><?= $campo->tags; ?></p>
	
	<?php } ?>
	
	</section>
</article>