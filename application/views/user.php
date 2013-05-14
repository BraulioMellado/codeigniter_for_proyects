
<section class="section">
	<article id="article">
		<!--Envia al mismo controlador pero a la funcion guardar -->
		<?= form_open("user/registrar_usuario")?>
		<?php
		$name=array(
			'name'=>'name'	,
			'placeholder'=>'Escriba su nombre de usuario');
		$pwd=array(
			'name'=>'pwd',
			'placeholder'=>'Escriba su password');
		$mail=array(
			'name'=>'mail',
			'placeholder'=>'Escriba su correo electronico');
		?>
		
		<?= form_label('Nombre de usuario')?>
		<?= form_input($name)?>
		<br>
		<?= form_label('Correo electronico')?>
		<?= form_input($mail)?>
		<br>
		<?= form_label('Password')?>
		<?= form_password($pwd)?>
		<br>
		<?= form_submit('enviar','Registrarse'	)?>
		<?= form_close()?>

	</article>
</section>