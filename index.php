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


            <article>
            <header>
            	<br>
                <h2 style="text-align: center;">Foros Populares</h2>
            </header>
            <section>
            	<ul>
                	<a href="formulario.php" style="margin-left: 30px; color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;"> Tema Nuevo </a>

                	<a href="foro.php"  style="margin-left: 30px; color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;"> Contestar Otro Foro </a>
                	</ul>
            	<div style="max-height: 600px; min-height: 280px;">
                	
                	
                <div class="header-container" style="padding:1px 10px; margin: 50px; padding: 50px;">   
                    <p style="color: white; white-space: nowrap;  width: 80%; text-overflow: ellipsis;">El propósito de los foros es mantener una comunicación abierta con cada uno de ustedes, donde podamos suplir diferentes necesidades, como por ejemplo:<br><br>
                    <il>1) Posteo de rutas para salir con los amigos o familiares.</il><br>
                    <il>2) Venta o compra de bicicletas o artículos para estas.</il><br>
                    <il>3) Ubicaciones de diferentes ciclos en diferentes lugares del país.</il><br>
                    <il>4) Reporte de algún evento relacionado a bicicletas.</il>
                    </p>
                </div>
            	</div>                        
            </section>
        </article>

        <table width="620px">
		<tr>
			<td width="20px" style="font-weight: bold; background-color: #BBBBBB;"></td>
			<td width="200px" style="font-weight: bold; background-color: #BBBBBB; text-align: left;">Tema</td>
			<td width="200px" style="font-weight: bold; background-color: #BBBBBB;">Fecha Posteo</td>
			<td width="200px" style="font-weight: bold; background-color: #BBBBBB;">Respuesta</td>
		</tr>
		<?php 
			include("./library/conexion.php");
			$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";

			$result = $mysqli->query($query);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$id = $row['ID'];
				$titulo = $row['titulo'];
				$fecha = $row['fecha'];
				$respuestas = $row['respuestas'];

				echo "<tr>";
					echo "<td><a href='foro.php?id=$id' style='color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;'>VER</a></td>";
					echo "<td>$titulo</td>";
					echo "<td>".date("d-m-y,$fecha")."</td>";
					echo "<td>$respuestas</td>";
				echo "</tr>";
			}
		?>
	</table>
</html>