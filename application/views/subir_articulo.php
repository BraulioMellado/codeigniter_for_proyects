
<article id="article">
	<section class="section">
		<!--Envia al mismo controlador pero a la funcion guardar -->
		<?= form_open("subir_articulo/guardar")?>
		<?php
		$titulo=array(
			'name'=>'titulo',
			'placeholder'=>'Escriba el nombre del artículo');
		$articulo=array(
			'name' => 'articulo',
			'placeholder'=>'Escriba el artículo',
			'rows' => '20',
			'cols' => '80');
		$tags=array(
			'name'=>'tags',
			'placeholder'=>'Escriba los tags del artículo');
		?>
		
		<?= form_label('Título')?>

		<?= form_input($titulo)?>

		<br/>
		<?= form_textarea($articulo)?>

		<br/>
		<?= form_label('Tags')?>

		<?= form_input($tags)?>

		<?= form_submit('enviar','Subir artículo')?>

		<?= form_close()?>

	</section>
</article>