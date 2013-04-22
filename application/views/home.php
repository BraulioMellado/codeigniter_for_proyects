
<article id="article">

<?php 	foreach ($articulo as $campo) {	?>

	<section class="section">
	
	<h2><a href="ver/<?= $campo->titulo_url; ?>"><?= $campo->titulo ?></a></h2>

	<p class="fech"><?= mdate("%d/%m/%Y",$campo->fech_up) ?></p>
	
	<p><?= $campo->publi ?></p>
	
	<p><?= $campo->tags ?></p>
	
	</section>
<?php } ?>

</article>