<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
	<script src="js/script.js"></script>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto - Samantha Arburola</title>
</head>

<body>
	<header>
		<h1>Portafolio Personal</h1>
		<h2>Samantha Arburola</h2>
	</header>

	<nav class="col-12">
		<ul>
			<li class="col-2"><a href="index.php">Inicio</a></li>
			<li class="col-2"><a href="formacion.php">Formación</a></li>
			<li class="col-2"><a href="intereses.php">Intereses Personales</a></li>
			<li class="col-2 active"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li class="col-2"><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles class="col-12">
			<section class="col-12 datas">

			<?php
				$var = $_GET["pro"];
				echo "$var";
			
			?>
				<h2>Portafolio de Proyectos</h2>
                <h3>Estimacao</h3>
				<dl class="col-12 proyecto">
					<dt>Curso</dt>
					<dd>Programación Orientada a Objetos</dd>

					<dt>Resumen</dt>
					<dd>Sistema de Adopción de Mascotas</dd>

					<dt>Descripción</dt>
					<dd>El sistema le permite crear un usuario para reportar mascotas perdidas, buscar mascotas para adoptar, colaborar con donaciones o habilitar una Casa Cuna. Las mascotas son filtradas por sus características físicas. También facilita un espacio para reportar el comportamiento de los adoptantes.</dd>

					<dt>Tipo de Proyecto</dt>
					<dd>Desarrollo</dd>

					<dt>Forma de Trabajo</dt>
					<dd>Grupal</dd>

					<dt>Cantidad de Integrantes</dt>
					<dd>4</dd>

					<dt>Rol</dt>
					<dd>Developer</dd>

					<dt>Tecnologías Utilizadas</dt>
					<dd class="list">Java</dd>
                    <dd class="list">POO</dd>
                    <dd class="list">NetBeans</dd>
                    <dd class="list">Wix</dd>

					<dt>Galería</dt>
					<div class="col-6 galeriaProyecto">
					<dd><img src="./ad-portafolio/
                        galeria/estimacao1.png" alt="Estimacao"></dd>
                    <dd><img src="../ad-portafolio/
                        galeria/estimacao1.png" alt="Estimacao"></dd>
                    </div>
				</dl>
			</section>
		</articles>
	</main>
	<footer>
	<p>
		© 2017 by Samantha Arburola - Introducción al Desarrollo de Aplicaciones Web
    </p>
	</footer>
</body>
</html>