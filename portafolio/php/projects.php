<?php
include ("conx.php");
$projectId = $_POST["id"];
$sql = "SELECT idCurso, nombre, resumen, semestre FROM proyecto WHERE idProyecto = ".$projectId;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr class='myTr'><td><a href='proyecto.html'>".$row["semestre"]."</a></td><td>".$row["idCurso"]."</td><td>".$row["nombre"]."</td><td>".$row["resumen"]."</td></tr>";
	}
}
mysqli_close($conn);
?>