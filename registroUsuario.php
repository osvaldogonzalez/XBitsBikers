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

    </script>
    <body>

        <div class="header-container">
            <header class="wrapper clearfix">
            <h1 class="title"><img src="img/bike.png"/>  XBitsBikers</h1>
                <nav>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registroUsuario.php">Registro</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
                <script src="js/facebookAPI.js"></script>
            <div class="main wrapper clearfix">

                <article >
                    <div style=" margin: auto; padding: 0px 60px 60px 60px;  width: 50%;">
                    <header>
                        <h1>Registro de Usuarios</h1>
                        <!-- <input type="text" name="status" id="status" /> -->
                    </header>
                    <section>
                        <div style="max-height: 600px; min-height: 300px; overflow-y: scroll;padding-bottom: 40px;">
                        <form method="post" action="./server/controllerUsuario.php" name="regForm" id="regForm">
                            
                            <label style="margin: auto; width: 20%; padding: 10px;" for="Nombre">Nombre:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Nombre" name="Nombre" value="<?PHP if(isset($_SESSION['Nombre'])) echo $_SESSION['Nombre'];?>" required placeholder="Nombre"><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Apellido">Apellidos:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Apellido" name="Apellido"  value="<?PHP if(isset($_SESSION['Apellido'])) echo $_SESSION['Apellido'];?>" required required placeholder="Apellidos"><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Direccion">Provincia:</label>
                            <select style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Direccion" name="Direccion">
                                <option value="San Jose">San Jose</option>
                                <option value="Alajuela">Alajuela</option>
                                <option value="Cartago">Cartago</option>
                                <option value="Heredia">Heredia</option>
                                <option value="Puntarenas">Puntarenas</option>
                                <option value="Limon">Limon</option>
                                <option value="Guanacaste">Guanacaste</option>
                              </select> <br>
                          
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Cedula">Cedula:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Cedula" name="Cedula"  value="<?PHP if(isset($_SESSION['Cedula'])) echo $_SESSION['Cedula'];  ?>" required placeholder="#-####-####"><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Telefono">Telefono:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Telefono" name="Telefono" value="<?PHP if(isset($_SESSION['Telefono'])) echo $_SESSION['Telefono']; ?>" required placeholder="########"><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Email">Email:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Email" name="Email" value="<?PHP if(isset($_SESSION['Email']))  echo $_SESSION['Email'];?>" required placeholder="ejemplo@xbitsbikers.com"><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="Usuario">Usuario:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Usuario" name="Usuario" value="<?PHP if(isset($_SESSION['Usuario'])) echo $_SESSION['Usuario']; ?>" required placeholder="Nombre de Usuario"><br>                                       
                            <label style="margin: auto; width: 20%; padding: 10px;" for="Contrasena">Contraseña:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="password" id="Contrasena" name="Contrasena" required><br>                                        
                            <input type="submit" class="button" id="Submit"  name="Submit" value="Registrar" style="margin: 10px 0px 10px 0px; width: 200px;"></button>
    
                        </form>
                         <button class="buttonFace" style="margin: 10px 0px 10px 0px; width: 200px;" onclick="Registro()">Facebook</button>
                         </div><!--dfasf-->
                    </section>
                                       
                </div>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div>
        <?php  include ("./library/mensajes.php");?>
        </div>

        <div class="footer-container">
            <footer class="wrapperfooterfixed">
                <h3>© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3>
                   <h3 style="margin:0px; padding:0px;">© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3> <a href="index.html" >About XBitsBikers </p>
                   <h3 style="margin:0px; padding:0px;">© Copyright 2017 - Proyecto Registro de Bicicetas 2017</h3> <a href="index.html" >About XBitsBikers </p>
           
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    
    </body>
</html>
