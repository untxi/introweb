<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
	<script src="js/script.js"></script>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contáctame - Samantha Arburola</title>
</head>

<body>
	<header class="col-12">
		<h1>Portafolio Personal</h1>
		<h2>Samantha Arburola</h2>
	</header>

	<nav class="col-12">
		<ul>
			<li class="col-2"><a href="index.php">Inicio</a></li>
			<li class="col-2"><a href="formacion.php">Formación</a></li>
			<li class="col-2"><a href="intereses.php">Intereses Personales</a></li>
			<li class="col-2"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li class="col-2 active"><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles class="col-12">
			<section class="contact">
				<h3 class="col-4">Información de Contacto</h3>
				<dl>
					<dt>Nombre</dt>
					<dd>Samantha Arburola León</dd>

					<dt>E-mail</dt>
					<dd>samarburola@gmail.com</dd>

					<dt>Skype</dt>
					<dd>sammy.arburola</dd>

					<dt>Móvil</dt>
					<dd>85867180</dd>
				</dl>
			</section>

			<section class="contact">
				<form class="col-6">
					<fieldset>
						<legend>Si lo prefiere</legend>
						<input class="" type="radio" name="via" >
                        <label class="">Escribir un mensaje</label>
						<br>
						<label for="name">Nombre</label>
						<input class="myIn" type="text">
						<br>
						<label for="email">E-mail</label>
						<input class="myIn" type="email">
						<br>
						<label for="mss">Mensaje</label>
						<input class="myIn" type="text">
						<br>
						<label for="mss">Color</label>
						<input class="myIn" type="color">
						<br><br>
						<input type="radio" name="via" >Contactar por Teléfono
						<br>
						<label for="phone">Número de Teléfono</label>
						<input class="myIn" type="phone">
						<br>
						<label for="chooseDates">Entre el </label>
						<input class="myInDate" type="date"> y el <input class="myInDate" type="date">
						<br>
						<label for="scheedle">Horario</label>
						<input class="myIn" type="text">
						<br>
						<label for="topic">Tema a tratar</label>
                        <dd><input type="checkbox">Formación</dd>
                        <dd><input type="checkbox">Intereses Personales</dd>
						<dd><input type="checkbox">Proyectos<dd>
						
						<button>Enviar</button>
					</fieldset>
				</form>
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