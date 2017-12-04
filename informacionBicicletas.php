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
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article >
                    <div style=" margin: auto;  width: 60%;">
                    <header>
                        <h1>Informacion de bicicleta</h1>
                    </header>
                    <section>
                        <form>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="user">Numero de marco:</label>
                            <input style="margin: 5px; margin: auto; width: 80%; padding: 10px;" id="user" name="i_user" required><br>

                                        <button class="button" style="margin: 30px 150px;">Buscar</button>
                                        </form>
                            
                    </section>
                    
                   
                </div>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapperfooterfixed">
                <h3 style="margin:0px; padding:0px;">Proyecto Registro de Bicicetas 2017</h3> 
                <!-- <a href="index.html"  class="footerLink">About XBitsBikers </p> -->
                    
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
