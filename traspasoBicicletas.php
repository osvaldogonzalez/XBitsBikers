<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/mensajes.css"  type="text/css" media="all" />

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">


        <script src="js/vendor/jquery-1.11.2.min.js"></script>
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

            $( document ).ready(function() {
                $( "#cedulaOrigen" ).prop( "disabled", true );
            });
          
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
                <li><a href="reporteBicicletas.php">Crear Alerta</a></li>
                <li><a href="informacionBicicletas.php">Informacion</a></li>
                   
                </ul>
            </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article >
                    <div style=" margin: auto;  width: 60%;">
                    <header>
                        <h1>Traspaso de bicicleta</h1>
                    </header>
                    <section>
                    <form method="post" action="./server/controllerTraspaso.php" name="regForm" id="regForm">
                            
                    <label style="margin: auto; width: 20%; padding: 10px;" for="user">Biciceta:</label>
                    <select style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="IdBicicleta" name="IdBicicleta">>
                    <option value="0"> Seleccion</option>  
                    <?php
                        include ("/library/conexion.php");
                        $sql = "SELECT IdBicicleta, NumeroMarco FROM bicicleta where IdUsuario = '".$_SESSION['s_usuario']."' ORDER BY IdBicicleta ASC";
                        $result = mysqli_query($conexion, $sql);
                        while($tabla_bici = mysqli_fetch_array($result)) {
                        echo "<option value='".$tabla_bici['IdBicicleta']."'>".$tabla_bici['NumeroMarco']."</option>";
                        }
                      ?>
                     </select> <br> 
                                      <label style="margin: auto; width: 20%; padding: 10px;"for="cedulaOrigen">Cedula del propietario:</label>
                                      <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="cedulaOrigen" name="cedulaOrigen" value="<?php echo($_SESSION['s_cedula']) ?>" readonly><br>
                                      <label style="margin: auto; width: 20%; padding: 10px;"for="cedulaDestino">Cedula del nuevo dueño:</label>
                                      <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="cedulaDestino"  name="cedulaDestino" required><br>
                                     <input type="submit" style="margin: 20px 0px; width: 200px;"class="button" id="Submit"  name="Submit" value="Traspasar" style="margin: 30px 150px;"><br>
                                   
                     </form>

                     <?php
                     	    include ("/library/conexion.php");
                             $result = mysqli_query($conexion,"SELECT Traspaso.CedulaOrigen,Traspaso.CedulaDestino, Traspaso.estado  
                             FROM Traspaso, usuario where traspaso.CedulaOrigen = usuario.Cedula
                             and traspaso.cedulaOrigen = '".$_SESSION['s_cedula']."' ");
                            
                           // $result = mysqli_query($conexion,"SELECT * FROM Traspaso where cedulaOrigen = '".$_SESSION['s_cedula']."' ");

                            echo "<table border='1'>
                            <caption>Lista de Traspasos</caption>
                            <tr>
                            <th>Cedula Propietario</th>
                            <th>Cedula nuevo dueño</th>
                            <th>Estado</th>
                            </tr>";

                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['CedulaOrigen'] . "</td>";
                            echo "<td>" . $row['CedulaDestino'] . "</td>";
                            echo "<td>" . $row['estado'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";


                            ?>
                    
                   
                </div>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->
        <div>
        <?php  include ("/library/mensajes.php");?>
        </div>

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
