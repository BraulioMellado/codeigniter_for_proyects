
<section id="section">
<?php 	foreach ($articulo as $campo) {	?>

	<article class="article">
	<h2><a href="ver/<?= $campo->titulo_url; ?>"><?= $campo->titulo ?></a>
	<span class="fech"> <?= mdate("%d/%m/%Y",$campo->fech_up) ?></span></h2>
	<p><?= $campo->publi ?></p>
	<p><?= $campo->tags ?></p>
	</acticle>
<?php } ?>

</section>