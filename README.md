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

Pero si estan usando XAMP en Linux, Windows o MAC entonces deberán de hacer lo siguiente.

Primero abriremos el archivo **httpd.conf** ubicado en **xampp/apache/conf** y deberemos de dejar las siguientes tres lineas como a continuación.

	Línea 203	AllowOverride All
	Línea 243	AllowOverride All
	Línea 362	AllowOverride All

Y en caso de que tengamos el proyecto en una sub carpeta a la raíz entonces cambiaremos la tercera línea de **.htaccess** así.

	RewriteRule ^(.*)$ /nombre_del_directorio/index.php/$1 [L]

Creación de la base de datos:
====================

Para poder hacer uso de las vistas ver y subir artículos, deberemos de realizar los siguientes pasos para configurar la base de datos y también los controladores que haremos usos.

Ingresando a **mysql** desde la terminal.

	mysql -u root -p

Creamos una nueva base de datos

	create database prueba;

La usamos.

	use prueba;

y crearemos la tabla para las publicaciones.

	create table publicacion (
	id int(10) not null auto_increment,
	titulo varchar(100) not null,
	publi text not null,
	fech_up int(10) not null,
	tags varchar(40) not null,
	titulo_url varchar(100) not null,
	primary key (id));

Ahora creamos para los usuarios

	create table user(
		iduser int(10) not null auto_increment, 
		name varchar(15) not null, 
		pwd varchar(32) not null, 
		mail varchar(25) not null, 
		primary key(iduser));

Ahora que ya tenemos lo básico podemos usar la base de datos de las vistas subir y ver archivos.