<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?= $titulo ?></title>
	<link rel="shortcut icon" href="imagenes/favicon.ico" />
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/estilo.css" />
</head>
<body>
<header id="header">
	<nav id="nav">
		<ul id="menu">
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

	<a href="<?= base_url() ?>"><img src="imagenes/logo.png"></a>
	<section id="carrucel">
		<a href="#" id="anterior">&laquo;</a>
		<div id="marco">
			<ul>
				<li class="uno">1</li>
				<li class="dos">2</li>
				<li class="tres">3</li>
				<li class="cuatro">4</li>
				<li class="cinco">5</li>
			</ul>
		</div>
		<a href="#" id="siguiente">&raquo;</a>
	</section>
</header>