<?php
/*$servername = "mississippi.ic-itcr.ac.cr";
$username = "sarburola";
$password = "sarburola";
$dbname = "sarburola";*/

$servername = "Localhost";
$username = "root";
$password = "ealvarez";
$dbname = "sarburola";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<p>Error de conección, vuelva a intentar en unos segundos</p>";
}
?>