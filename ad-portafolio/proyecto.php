<!DOCTYPE html>
<html>
<head>
<script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
	<meta charset="UTF-8" />
	<title>Proyecto - Samantha Arburola</title>
</head>

<body>
	<header>
		<h1>Portafolio Personal</h1>
		<h2>Samantha Arburola</h2>
	</header>

	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="formacion.php">Formación</a></li>
			<li><a href="intereses.php">Intereses Personales</a></li>
			<li class="active"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles>
			<section class="datas">
				<h2>Portafolio de Proyectos</h2>
				<dl>
					<dt>Proyecto</dt>
					<dd><input id="nombre" type="text"></dd>

					<dt>Curso</dt>
					<dd>
                        <select name="curso" id="curso" onchange="selCourse()">
                            <option value="0">Seleccione</option>
                            <?php
                            #<option value="1">IDAW</option>
                            include ("php/conx.php");
                            $sql = "SELECT idCurso, nombre FROM curso";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								echo "<option value=".$row["idCurso"].">".$row["nombre"]."</option>";
								}
							}

							mysqli_close($conn);

                            ?>
                            <option value="n">Nuevo Curso</option>
                        </select>
                        <?php
                        	
                        ?>

                        <div class="oculta" id="addCourse">
                            Código: <input id="cursoCodigo" type="text" onchange="checkCode()">
                            Nombre: <input id="cursoNombre" type="text">
                            <button onclick="newCourse()">Enviar</button>
                            <button id="idCancelCourse" onclick="cancelCourse()">Cancelar</button>
                        </div>
                    </dd>
                    
					<dt>Resumen</dt>
					<dd><input id="resumen" type="text"></dd>

					<dt>Descripción</dt>
					<dd><input id="descripcion" type="text"></dd>
                    
                    <dt>Tecnologías Utilizadas</dt>
                    
					<?php
                        include ("php/conx.php");
                        $sql = "SELECT idTecnologia, nombre FROM tecnologia";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							echo "<dd><input id='".$row["idTecnologia"]."' type='checkbox' name='tec'>".$row["nombre"]."</dd>";
							}
						}

						mysqli_close($conn);

                    ?>

                    <dd><button id="idAddTech" onclick="addTech()">Agregar</button>
                        <div class="oculta" id="newTech">
                            Nombre: <input id="tech" type="text">
                            <button onclick="">Guardar</button>
					        <button onclick="cancelTech()">Cancelar</button>
					    </div>
                    </dd>

					<dt>Tipo de Proyecto</dt>
					<dd><input type="radio" name="projectType">Investigación</dd>
                    <dd><input type="radio" name="projectType">Desarrollo</dd>
                    <dd><input type="radio" name="projectType">Infraestructura</dd>

					<dt>Forma de Trabajo</dt>
					<dd><select name="grupo" id="grupo" onchange="grupo()">
                        <option value="i">Individual</option>
                        <option value="g">Grupal</option>
                        </select>
                    </dd>
					<div class="oculta" id="divInte">
                        <dd>Cantidad de Integrantes
                        	<input type="number" min="1">
                        </dd>
                    </div>
					   <dd>Rol <input type="text"></dd>


					<dt>Galería (((no disponible)))</dt>
					<dd>
                        <button onclick="addPic()">Agregar</button>
                        <div class="visible">
                            <input type="file" name="datafile" size="50">
                        </div>
                    </dd>
					
					<dt><button class="save">Guardar</button></dt>
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
<script src="js/script.js"></script>
</html>