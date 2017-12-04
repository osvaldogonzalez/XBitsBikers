<?php

	include ("../library/conexion.php");
	
    $Marca = $_POST['Marca'];
	$Modelo = $_POST['Modelo'];
	$Color = $_POST['Color'];
	$NumeroFactura = $_POST['NumeroFactura'];
	$NumeroMarco = $_POST['NumeroMarco'];
	$LugarCompra = $_POST['LugarCompra'];
	$Caracteristicas = $_POST['Caracteristicas'];
	  
	/*Registro Bibicleta ********************/ 
		$query = "INSERT INTO bicicleta (Marca, Modelo, Color, NumeroFactura, NumeroMarco, LugarCompra, Caracteristicas) VALUES ('$Marca', '$Modelo', '$Color', '$NumeroFactura', '$NumeroMarco', '$LugarCompra', '$Caracteristicas')";

		mysqli_query($conexion, $query) 
		or die("Error ejecutando query en la BDs");

		header('location: ../registroBicicleta.php');

		echo "Bicicleta agregada con exito!";

		//Mostrar datos en la lista
		$results = mysqli_query($conexion, "SELECT * FROM usuario");

		mysqli_close($conexion);
?>