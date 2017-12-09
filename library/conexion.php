<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xbitsbikers";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) 
{
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
	 