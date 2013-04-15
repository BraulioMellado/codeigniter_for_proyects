
<article id="article">
	<section class="section">
		<?= form_open("recibir")?>
		<?php
		$titulo=array(
			'name'=>'titulo',
			'placeholder'=>'Escriba el nombre del artículo');
		$articulo=array(
			'name' => 'articulo',
			'placeholder'=>'Escriba el artículo',
			'rows' => '20',
			'cols' => '80');
		?>
		
		<?= form_label('Título')?>

		<?= form_input($titulo)?>

		<br/>
		<?= form_textarea($articulo)?>

		<?= form_submit('enviar','Subir artículo')?>

		<?= form_close()?>

	</section>
</article>