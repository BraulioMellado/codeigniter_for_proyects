
<article id="article">
	<section class="section">
	<?php foreach ($articulo as $campo) {?>

	<h2><a href=""><?= $campo->titulo; ?></a></h2>
	<p><?= $campo->publi; ?></p>
	<p><?= $campo->tags; ?></p>
	<?php } ?>
</section>
</article>