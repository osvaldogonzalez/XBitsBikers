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

                <article>
                        <div style=" margin: auto;  width: 50%;">
                    <header>
                        <h1>Login</h1>
                    </header>
                    <section>
                       <form method="post" action="./server/controllerLogin.php" name="loginForm" id="loginForm">
                            
                            <label style="margin: auto; width: 20%; padding: 10px;" for="Usuario">Usuario:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="Usuario" name="Usuario" required><br>
                            <label style="margin: auto; width: 20%; padding: 10px;" for="pass">Contraseña:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" type="Password" id="Password" name="Password" required><br>
                            
                            
                            <input type="submit" style="margin: 20px 0px; width: 200px;"class="button" id="Submit"  name="Submit" value="Registrar" style="margin: 30px 150px;"><br>
                                </form>
                            <button class="buttonFace" style="margin: 0px 0px; width: 200px;" onclick="Login()">Facebook</button>
                                          
                            
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
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
