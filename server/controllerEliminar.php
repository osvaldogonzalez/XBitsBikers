<?php
	include ("../library/conexion.php");
	
	$IdBicicleta = $_REQUEST['IdBicicleta'];
	  
	/**********Actualiza Bibicleta************/ 
	$query = "DELETE FROM bicicleta WHERE IdBicicleta='$IdBicicleta' ";

		mysqli_query($mysqli, $query) 
		or die("Error ejecutando query en la BDs");

		header('location: ../listaBicicletas.php');

		echo "Bicicleta eliminada con exito!";
?>