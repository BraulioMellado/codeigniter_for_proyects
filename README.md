Código fuente para proyectos hechos en Code Igniter
======================================

Este repositorio contiene la configuración que se necesita para iniciar un proyecto en **Code Igniter** sin tener que hacer las configuraciones básicas, además de instrucciones para cambiarlo y mejorarlo.

Este trabajo es para libre uso, **Code Igniter** les pertenece a [EllisLab](http://ellislab.com/codeigniter) y el trabajo que realizo es solo para no tener que hacer los mismos cambios cada vez que tenga que crear un proyecto en **Code Igniter**.

Configuración básica para que funcione:
=======================================

Lo primero que debemos de hacer es cambiar la **base_url()** que nos ayudara a utilizar **url relativas** el cual esta ubicado en la linea 7 del archivo **application/config/config.php** por la dirección de nuestro sitio web, en mi caso.

	http://localhost/codeigniter_by_proyects/

Tenga en cuenta que el **/** al final se tomara en cuenta al momento de colocar las **urls**.

Configuración de Apache para eliminar el **index.php** dentro del localhost:
=============================================

Si estas en Linux deberás de ejecutar los siguientes comandos en tu terminal.

Primero activaremos el modulo de apache.

	sudo a2enmod rewrite

Ahora en este archivo cambiaremos **AllowOverRide None** por **AllowOverRide All** en los tres casos.

	sudo gedit /etc/apache2/sites-available/default

Ahora solo necesitaremos reiniciar Apache.

	sudo 	/etc/init.d/apache2 restart

Ahora podremos podrás especificar el **.htaccess** a nuestro gusto, como [yo lo hice](https://github.com/juliopalro/codeigniter_by_proyects/blob/master/.htaccess).

Creación de la base de datos:
====================

Para poder hacer uso de las vistas ver y subir artículos, deberemos de realizar los siguientes pasos para configurar la base de datos y también los controladores que haremos usos.

Ingresando a **mysql** desde la terminal.

	mysql -u root -p

Creamos una nueva base de datos

	create database prueba;

La usamos.

	use prueba;

y crearemos la tabla respectiva.

	create table publicacion (
	id int(10) not null auto_increment,
	titulo varchar(100) not null,
	publi text not null,
	fech_up int(8) not null,
	tags varchar(40) not null,
	primary key (id)
	);

Ahora que ya tenemos lo básico podemos usar la base de datos de las vistas subir y ver archivos.