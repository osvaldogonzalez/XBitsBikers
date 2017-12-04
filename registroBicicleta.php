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
        <?php session_start(); ?>
    </head>

    <?php 
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
    ?>

    <script type="text/javascript">
        function showLightbox() {
            document.getElementById('over').style.display='slow';
            document.getElementById('fade').style.display='slow';
        $(document).ready(function() {
                    $("#over").delay(500).fadeIn('slow');
                    $("#fade").delay(1).slideDown('slow');                    
                });
        }
        function hideLightbox() {
            document.getElementById('over').style.display='slow';
            document.getElementById('fade').style.display='slow';
            $(document).ready(function() {
                    $("#over").delay(1).fadeOut('slow');
                    $("#fade").delay(100).fadeOut('slow');
                });
        }
    </script>

    <body>
        <div class="header-container">
            <header class="wrapper clearfix">
            <h1 class="title"><img src="img/bike.png"/>  XBitsBikers</h1>
                <nav>
                <ul>
                <li><a href="#.html"><?php echo $_SESSION['s_nombre'] ?></a></li>
                <li><a href="foros.php">Foros</a></li>
                <li><a href="registroBicicleta.php">Registro</a></li>
                <li><a href="traspasoBicicletas.php">Traspaso</a></li>
                <li><a href="reporteBicicletas.php">Reporte</a></li>
                <li><a href="informacionBicicletas.php">Informacion</a></li>
                   
                </ul>
            </nav>
            </header>
        </div>
        <!--
         **************************Eliminar Bicicleta***************************
        -->
    <!-- 
        <div>
            <input type="text" name="IdBicicleta" placeholder="Ingrese el ID de la bici">
            <input type="submit" name="eliminar" value="Eliminar">
            <?php
            
                /*$IdBicicleta = $_POST['IdBicicleta'];
                mysql_select_db($dbname, $conexion) or die ("Error al conectar la base de datos");
                mysql_query("DELETE FROM bicicleta WHERE IdBicicleta=$IdBicicleta");
                echo "Eliminado Correctamente!";*/
            ?>
        </div>
    -->
        
    <!--
         **************************Mostrar Bicicleta***************************
        -->
      

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <div style=" margin: auto;  width: 60%;">
                    <header>
                        <h1>Registro de bicicleta</h1>
                    </header>
                    <section>
                        <div style="max-height: 600px; min-height: 300px; overflow-y: scroll;padding-bottom: 40px;">
                        <form method="post" action="./server/controllerBicicleta.php" name="regForm" id="regForm">
                            
                            <label style="margin: auto; width: 20%; padding: 10px;" for="Marca">Marca:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="Marca" name="Marca" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Modelo">Modelo:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="Modelo" name="Modelo" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Color">Color:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="Color" name="Color" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="NumeroFactura">Numero de Factura:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="NumeroFactura" name="NumeroFactura" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="NumeroMarco">Numero de Marco:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="NumeroMarco" name="NumeroMarco" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="LugarCompra">Lugar de Compra:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="LugarCompra" name="LugarCompra" required><br>

                            <label style="margin: auto; width: 20%; padding: 10px;" for="Caracteristicas">Caracteristicas:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="text" id="Caracteristicas" name="Caracteristicas"><br> 

                             <button type="submit" class="button" style="margin: 30px 150px;">Registrar</button>
                        </form>  
                        </div>                          
                    </section>                   
                </div>
                </article>
                </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapperfooterfixed">
                <h3>© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3>
                <h3 style="margin:0px; padding:0px;">© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3> <a href="index.html" >About XBitsBikers </p>
           
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>