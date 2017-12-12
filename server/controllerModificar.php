<?php

	include ("../library/conexion.php");
	
	$IdBicicleta = $_REQUEST['IdBicicleta'];

    $Marca = $_POST['Marca'];
	$Modelo = $_POST['Modelo'];
	$Color = $_POST['Color'];
	$NumeroFactura = $_POST['NumeroFactura'];
	$NumeroMarco = $_POST['NumeroMarco'];
	$LugarCompra = $_POST['LugarCompra'];
	$Caracteristicas = $_POST['Caracteristicas'];
	  
	/**********Actualiza Bibicleta************/ 
	$query = "UPDATE bicicleta SET Marca='$Marca', Modelo='$Modelo', Color='$Color', NumeroFactura='$NumeroFactura', NumeroMarco='$NumeroMarco', LugarCompra='$LugarCompra', Caracteristicas='$Caracteristicas' WHERE IdBicicleta='$IdBicicleta'";

		mysqli_query($mysqli, $query) 
		or die("Error ejecutando query en la BDs");

		header('location: ../listaBicicletas.php');

		echo "Bicicleta modificada con exito!";
?>