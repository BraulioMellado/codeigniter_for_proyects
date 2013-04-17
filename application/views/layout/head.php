<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?= $titulo ?></title>
	<link rel="shortcut icon" href="<?= base_url()?>imagenes/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/estilo.css">
<body>
	<header id="header">
	<nav id="nav">
		<ul>
			<li><a href="<?= base_url()?>">Home</a></li>
			<li><a href="#">Categorias</a></li>
			<li><a href="#">Destacados</a></li>
			<li><a href="<?= base_url()?>subir_articulo">Subir Articulo</a></li>
		</ul>
		<form class="buscar" action="<?= base_url() ?>resultados" method="post">
			<input class="titulo" type="text" name="titulo" placeholder="Título del artículo" />
			<input type="submit" value="Buscar" />
		</form>
	</nav>
	<h1>Nombre de la compañia</h1>
</header>