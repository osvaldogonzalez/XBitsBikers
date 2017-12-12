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

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <div style=" margin: auto;  width: 60%;">
                    <header>
                        <h1>Registro de bicicleta</h1>
                    </header>
                    <section>
                        <div style="max-height: 600px; min-height: 300px; padding-bottom: 40px;">

                            <?php 
                                $IdBicicleta = $_REQUEST['IdBicicleta'];

                                include("./library/conexion.php");
                                $query = "SELECT * FROM  bicicleta WHERE IdBicicleta=$IdBicicleta";
                                $result = $mysqli->query($query);

                                $mostrar = $result->fetch_assoc();
                            ?>

                        <form method="post" action="./server/controllerModificar.php?IdBicicleta=<?php echo $mostrar['IdBicicleta']; ?>" name="regForm" id="regForm">

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Marca">Marca:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['Marca']; ?>" type="text" id="Marca" name="Marca" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Modelo">Modelo:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['Modelo']; ?>" type="text" id="Modelo" name="Modelo" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Color">Color:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['Color']; ?>" type="text" id="Color" name="Color" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="NumeroFactura">Numero de Factura:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['NumeroFactura']; ?>" type="text" id="NumeroFactura" name="NumeroFactura" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="NumeroMarco">Numero de Marco:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['NumeroMarco']; ?>" type="text" id="NumeroMarco" name="NumeroMarco" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="LugarCompra">Lugar de Compra:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['LugarCompra']; ?>" type="text" id="LugarCompra" name="LugarCompra" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Caracteristicas">Caracteristicas:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" value="<?php echo $mostrar['Caracteristicas']; ?>" type="text" id="Caracteristicas" name="Caracteristicas"><br> 

                             <button type="submit" class="button" style="margin-left: 200px;">Registrar</button>
                        </form>  
                        </div>                          
                    </section>                   
                </div>
                </article>
                </div> <!-- #main -->
        </div> <!-- #main-container -->
    </body>

    <div class="footer-container">
        <footer class="wrapperfooterfixed">
            <h3>Proyecto Registro de Bicicletas 2017</h3>
        </footer>
    </div>
</html>