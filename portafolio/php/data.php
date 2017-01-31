<?php
$var = $_GET["pro"];
include ("conx.php");

$sql = "SELECT idProyecto, idCurso, nombre, resumen, descripción, tipo, grupo, rol FROM proyecto WHERE idProyecto='".$var."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($sql) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	
		$sql2 = "SELECT nombre FROM curso WHERE idCurso='".$row["idCurso"]."'";
		$cursoQ = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($cursoQ) > 0) {
			while($row2 = mysqli_fetch_assoc($cursoQ)) {
				$curso = $row2["nombre"];
			}
		}

		if ($row["grupo"] == "1") {
			$forma = "Individual";
		}else{
			$forma = "Grupal</dd><dt>Cantidad de Integrantes</dt><dd>".$row["grupo"];
		}

		echo "<h3>".$row["nombre"]."</h3><dl class='col-12 proyecto'><dt>Curso</dt><dd>".$curso."</dd>
		<dt>Resumen</dt><dd>".$row["resumen"]."</dd><dt>Descripción</dt><dd>".$row["descripcion"]."</dd><dt>Tipo de Proyecto</dt>
		<dd>".$row["tipo"]."</dd><dt>Forma de Trabajo</dt><dd>".$forma."</dd><dt>Rol</dt><dd>".$row["rol"]."</dd><dt>Tecnologías Utilizadas</dt><dd class='lis'>Java</dd>";
		#<dt>Galería</dt><div class='col-6 galeriaProyecto'>";
		echo "</dl>";
	}
}

mysqli_close($conn); 

?>
<!--
		$sql3 = "SELECT ruta FROM galleria WHERE idProyecto=".$row["idProyecto"];
		$pictures = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($pictures) > 0) {
			while($img = mysqli_fetch_assoc($pictures)) {
				echo "<dd><img src='".$img["ruta"]."' alt='".$row["nombre"]."''></dd>";
			}
		} echo "</div>";-->