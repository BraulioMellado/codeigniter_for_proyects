Código fuente para proyectos hechos en Code Igniter
======================================

Este repositorio contiene la configuración que se necesita para iniciar un proyecto en **Code Igniter** sin tener que hacer las configuraciones básicas y demás.

Este trabajo es para libre uso, **Code Igniter** les pertenece a [EllisLab](http://ellislab.com/codeigniter) y el trabajo que realizo es solo para no tener que hacer los mismos cambios cada vez que tenga que crear un proyecto en **Code Igniter**.

Configuración básica para que funcione:
=======================================

Lo primero que debemos de hacer es cambiar la **base_url()** ubicado en la linea 7 del archivo **application/config/config.php** por la dirección de nuestro sitio web, en mi caso.

	http://localhost/codeigniter_by_proyects/

Tenga en cuenta que el **/** al final se tomara en cuenta al momento de colocar las **urls**.

Configuración de Apache dentro del localhost:
=============================================

Si estas en Linux deberás de ejecutar los siguientes comandos en tu terminal.

Primero activaremos el modulo de apache.

	sudo a2enmod rewrite

Ahora en este archivo cambiaremos **AllowOverRide None** por **AllowOverRide All** en los tres casos.

	sudo gedit /etc/apache2/sites-available/default

Ahora solo necesitaremos reiniciar Apache.

	sudo 	/etc/init.d/apache2 restart

Ahora podremos podrás especificar el **.htaccess** a nuestro gusto.