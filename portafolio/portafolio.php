<!DOCTYPE html>
<html>
<head>
	<script src="jquery.js"></script>
	<script src="cargar.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portafolio - Samantha Arburola</title>
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
			<li class="col-2 active"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li class="col-2"><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles class="col-12">
			<section class="col-12 portafolio">
				<h3>Cursos de Semestre Actual</h3>
				<br>
				<h3>Verano16-17</h3>
				<table class="col-12">
					<tr>
						<th class="col-2 myTh">Código</th>
						<th class="col-4 myTh">Nombre</th>
						<th class="col-3 myTh">Profesor</th>
						<th class="col-2 lasTh">Horario</th>
					</tr>
					<tr class="myTr">
						<td>IC-8016</td>
						<td>Introducción a Desarrollo de Aplicaciones Web</td>
						<td>Eugenia Zeledón</td>
						<td>k-m-j 1pm-5pm</td>
					</tr>
                    <tr class="myTr">
						<td>IC-8016</td>
						<td>Introducción a Desarrollo de Aplicaciones Web</td>
						<td>Eugenia Zeledón</td>
						<td>k-m-j 1pm-5pm</td>
					</tr>
				</table>
			</section>

			<section class="col-12 portafolio">
				<h3>Proyectos Desarrollados</h3>
				<table class="col-12">
					<thead>
						<th class="col-2 myTh">Semestre</th>
						<th class="col-3 myTh">Curso</th>
						<th class="col-3 myTh">Nombre</th>
						<th class="col-3 lasTh">Resumen</th>
					</thead>

					<?php
						$servername = "mississippi.ic-itcr.ac.cr";
						$username = "sarburola";
						$password = "sarburola";
						$dbname = "sarburola";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);

					$sql = "SELECT idProyecto, idCurso, nombre, resumen, semestre FROM proyecto";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo "<tr class='myTr'>
						<td><a class='plink' id='".$row["idProyecto"]."' href='#'>".$row["semestre"]."</a></td>
						<td>".$row["idCurso"]."</td>
						<td>".$row["nombre"]."</td>
						<td>".$row["resumen"]."</td></tr>";
						}
					}

					mysqli_close($conn);
					?>
				</table>
			</section>

		</articles>
	</main>

	<a class="plink" id="2" href="#">help</a>
	
	<footer class="col-12">
	<p>
		© 2017 by Samantha Arburola - Introducción al Desarrollo de Aplicaciones Web
    </p>
	</footer>
</body>
</html>

