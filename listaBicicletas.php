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

 <!--**************************Mostrar Bicicleta***************************-->
    <table style="width: 250px;">
        <tr>
            <td style="font-weight: bold; background-color: #BBBBBB;">Marca</td>
            <td style="font-weight: bold; background-color: #BBBBBB;">Modelo</td>
            <td style="font-weight: bold; background-color: #BBBBBB;">Color</td>
            <td style="font-weight: bold; background-color: #BBBBBB;">Factura</td>
            <td style="font-weight: bold; background-color: #BBBBBB;">Comprado</td>
            <td style="font-weight: bold; background-color: #BBBBBB;">Caracteristicas</td>
            <td style="font-weight: bold; background-color: #BBBBBB;"># Marco</td>
            <td style="font-weight: bold; background-color: #BBBBBB; text-align: center;" colspan="4">Opción</td>
        </tr>
        <?php 
            include("./library/conexion.php");
            $query = "SELECT * FROM  bicicleta";
            $result = $mysqli->query($query);

            while($mostrar = $result->fetch_assoc()){
        	?>
                <tr>
                	<td><?php echo $mostrar['Marca']; ?></td>
	                <td><?php echo $mostrar['Modelo']; ?></td>
	                <td><?php echo $mostrar['Color']; ?></td>
	                <td><?php echo $mostrar['NumeroFactura']; ?></td>
	                <td><?php echo $mostrar['LugarCompra']; ?></td>
	                <td><?php echo $mostrar['Caracteristicas']; ?></td>

               		<td><a href="modificar.php?IdBicicleta=<?php echo $mostrar['IdBicicleta']; ?>" style="color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;">Editar</a></td>
                    <td><a href="./server/controllerEliminar.php?IdBicicleta=<?php echo $mostrar['IdBicicleta']; ?>" style="color:white; text-decoration:none; background-color: red; border-radius: 10px; width: 20px; height: 90px; padding: 10px;">Eliminar</a></td>";
                </tr>
           <?php } ?>
    </table>
  </body>

  	<div class="footer-container">
	    <footer class="wrapperfooterfixed">
	        <h3>Proyecto Registro de Bicicletas 2017</h3>
	    </footer>
	</div>

</html>