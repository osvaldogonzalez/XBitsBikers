<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

            <div class="header-container">
                <header class="wrapper clearfix">
                    <h1 class="title">XBitsBikers</h1>
                    <nav>
                        <ul>
                            <li><a href="#.html">Usuario</a></li>
                            <li><a href="index.php">Foros</a></li>
                            <li><a href="registroBicicleta.php">Registro</a></li>
                            <li><a href="traspasarBicicleta.html">Traspaso</a></li>
                            <li><a href="reporteBicicleta.html">Reporte</a></li>
                            <li><a href="informacionBicicleta.html">Informacion</a></li>
                           
                        </ul>
                    </nav>
                </header>
            </div>

<?php
	include("./library/conexion.php");
	if(isset($_GET["id"]))
	$id = $_GET['id'];
	$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC"; // WHERE ID = '$id' ORDER BY fecha DESC
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		echo "<table style='width: 620px;'>";
		echo "<tr><td>Título: $titulo</td></tr>";
		echo "<tr><td>Autor: $autor</td></tr>";
		echo "<tr><td>Mensaje: $mensaje</td></tr>";
		echo "<td style='background-color:transparent;'><a href='formulario.php?id&respuestas=$respuestas&identificador=$id' style='color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;'>Responder</a></td>";
		echo "</table>";
		echo "<br>";
	}
	
	$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC"; // WHERE ID = '$id' ORDER BY fecha DESC
	$result2 = $mysqli->query($query2);
	//echo "<br />respuestas:<br /><br />";
	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];

		echo "<table style='width: 620px;'>";
		echo "<tr><td>Título: $titulo</td></tr>";
		echo "<tr><td>Autor: $autor</td></tr>";
		echo "<tr><td>Mensaje: $mensaje</td></tr>";
		echo "<td><a href='formulario.php?id&respuestas=$respuestas&identificador=$id' style='color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;'>Responder</a></td>";
		echo "</table>";
		echo "<br>";	
	}
?>
</body>
	<div class="footer-container">
      	<footer class="wrapperfooterfixed">
      		<h3>Proyecto Registro de Bicicetas 2017</h3>
      	</footer>
  	</div>
      	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      	<script src="js/main.js"></script>
</html>