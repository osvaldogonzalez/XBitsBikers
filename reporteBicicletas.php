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
        <link rel="stylesheet" href="css/mensajes.css"  type="text/css" media="all" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
                        <h1>Reportar bicicleta</h1>
                    </header>
                    <section>
                    <form method="post" action="./server/controllerReporteBicicleta.php" name="regForm" id="regForm">
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
                            
                            <label style="margin: auto; width: 40%; padding: 10px;" for="user">Tipo de Evento:</label>
                            <select style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Estadobici" name="Estadobici">
                                    <option value="australia">Robada</option>
                                    <option value="australia">Perdida</option>
                                  </select> <br> 
                                  
                                        <label style="margin: auto; width: 50%; padding: 10px;"for="user">Descripcion del robo:</label>
                                        <textarea rows="3" cols="40" style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="DescripcionAlerta" name="DescripcionAlerta" required></textarea><br>
                                        <label style="margin: auto; width: 40%; padding: 10px;"for="user">Ubicacion del robo:</label>
                                        <textarea rows="3" cols="40" style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="UbicacionRobo" name="UbicacionRobo" required></textarea><br>
                                        <div class="form-group">
                                        <label for="dtp_input1" style="margin: auto; width: 50%; padding: 10px;">Fecha/Hora del incidente</label> <br>
                                        <div class="input-group date form_datetime" data-date="2017-17-12T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                              
                                        <input type="hidden" name="Fecha" id="dtp_input1" value="" /><br/>
                                    </div>
                                    </div>

                                       <!-- <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Fecha" name="Fecha" required>--><br>
                                    
                                      
                                        <input type="submit" style="margin: 20px 0px; width: 200px;"class="button" id="Submit"  name="Submit" value="Reportar" style="margin: 30px 150px;"><br>
                                        </form>
                            
                    </section>

                </div>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->
        <div>
        <?php  include ("/library/mensajes.php");?>
        </div>

        <div class="footer-container">
            <footer class="wrapperfooterfixed">
                <h3>© Copyright 2017 - Registro de Bicicetas 2017</h3>
                <h3 style="margin:0px; padding:0px;">© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3> <a href="index.html" >About XBitsBikers </p>
                    
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
        <script type="text/javascript">

    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
    </script>

    </body>
</html>
