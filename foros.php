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

                <article>
                    <header>
                        <h1>Foros Populares</h1>
                    </header>
                    <section >
                            <div style="max-height: 600px; min-height: 300px; overflow-y: scroll;">
                            <div class="header-container" style="padding:1px 10px; margin: 10px 0px; ">
                                    <h2 style="color: white;">Foro #1</h2>
                                    <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                
                                </div>
                                <div class="header-container" style="padding:1px 10px; margin: 10px 0px;">
                                        <h2 style="color: white;">Foro #2</h2>
                                        <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                    
                                    </div>
                                    <div class="header-container" style="padding:1px 10px; margin: 10px 0px;">
                                            <h2 style="color: white;">Foro #3</h2>
                                            <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                        
                                        </div>
                                        <div class="header-container" style="padding:1px 10px; margin: 10px 0px;">
                                                <h2 style="color: white;">Foro #4</h2>
                                                <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                            
                                            </div>
                                            <div class="header-container" style="padding:1px 10px; margin: 10px 0px;">
                                                    <h2 style="color: white;">Foro #5</h2>
                                                    <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                                
                                                </div>
                                                <div class="header-container" style="padding:1px 10px; margin: 10px 0px;">
                                                        <h2 style="color: white;">Foro #6</h2>
                                                        <p style="color: white; white-space: nowrap;  width: 100%; overflow: hidden; text-overflow: ellipsis; ">Vestibulum molestie purus eu volutpat tempor. Pellentesque rhoncus dolor vel enim efficitur, eu hendrerit arcu lobortis. Mauris ultricies mattis mi vitae commodo. Nullam eros enim, accumsan a accumsan ut, dapibus sit amet sem. Pellentesque enim turpis, pharetra sit amet augue non, ullamcorper hendrerit lorem.  </p>
                                                    
                                                    </div>
                                </div>
                      
                    </section>
                    
                   
               
                </article>
                <aside>
                      <form>
                            <h3>Crear foro nuevo</h3>
                            <div>
                            <label  for="titulo">Titulo:</label>
                            <input style="margin: auto; width: 100%; padding: 10px;" id="user" name="i_user" required><br>
                            <label style="margin: auto; width: 20%; padding: 10px;"for="aporte">Aporte:</label>
                            <textarea rows="3" cols="20" style=" margin: auto; width: 100%; padding: 10px;" id="user" name="i_user" required></textarea><br>
                       
                                        
                                        <button class="button" style="margin: 30px 150px;">Enviar</button>
                            </div>
                                        </form>
                            
                    
                </aside>
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
