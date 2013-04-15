
<article id="article">
	<section class="section">
		<?= form_open("subir_articulo")?>
		<?php
		$titulo=array(
			'name'=>'Titulo',
			'placeholder'=>'Escriba el nombre del artículo');
		$articulo=array(
			'name' => 'articulo',
			'placeholder'=>'Escriba el nombre del artículo',
			'rows' => '20',
			'cols' => '80');
		?>
		
		<?= form_label('Título')?>

		<?= form_input($titulo)?>

		<br/>
		<?= form_textarea($articulo)?>

		<?= form_close()?>

	</section>
</article>