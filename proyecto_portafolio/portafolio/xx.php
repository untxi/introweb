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
			<h2>Portafolio de Proyectos</h2>

			<?php
				include ("conx.php");

				$var = $_GET["pro"];

				$sql = "SELECT idProyecto, idCurso, nombre, resumen, descripcion, tipo, grupo, rol FROM proyecto WHERE idProyecto=$var";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["nombre"];
						/*$sql2 = "SELECT nombre FROM curso WHERE idCurso='".$row["idCurso"]."'";
						$cursoQ = mysqli_query($conn, $sql2);
						if (mysqli_num_rows($cursoQ) > 0) {
							while($row2 = mysqli_fetch_assoc($cursoQ)) {
								$curso = $row2["nombre"];
							}
						}

						if ($row["grupo"] == 1) {
							$forma = "Individual";
						}else{
							$forma = "Grupal</dd><dt>Cantidad de Integrantes</dt><dd>".$row["grupo"];
						}

						echo "<h3>".$row["nombre"]."</h3>";
						echo "<dl class='col-12 proyecto'><dt>Curso</dt><dd>".$curso."</dd>
						<dt>Resumen</dt><dd>".$row["resumen"]."</dd>
						<dt>Descripción</dt><dd>".$row["descripcion"]."</dd>
						<dt>Tipo de Proyecto</dt><dd>".$row["tipo"]."</dd>
						<dt>Forma de Trabajo</dt><dd>".$forma."</dd>
						<dt>Rol</dt><dd>".$row["rol"]."</dd>
						<dt>Tecnologías Utilizadas</dt><dd class='list'>Java</dd>
						<dt>Galería</dt><div class='col-6 galeriaProyecto'>";

						$sql3 = "SELECT ruta FROM galleria WHERE idProyecto=".$row["idProyecto"];
						$pictures = mysqli_query($conn, $sql3);
						if (mysqli_num_rows($pictures) > 0) {
							while($img = mysqli_fetch_assoc($pictures)) {
								echo "<dd><img src='".$img["ruta"]."' alt='".$row["nombre"]."''></dd>";
							}
						}

						echo "</div></dl>";*/
					}
				}else{
					echo "<p>No Hay Proyectos Disponibles</p>";}

mysqli_close($conn); 				
			?>
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