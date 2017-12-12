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

<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
?>
  <aside>
    <table>
        <form name="form" action="agregar.php" method="post">
            	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
            	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">

              <h2 style="margin: 1px; padding-left: 28%;">Crear Foro</h2>

              <tr>
            		<td>Autor </td>
            		<td><input style="margin: auto; width: 40%; padding: 6px; color: black;" type="text" name="autor"></td>
              </tr>
              <tr>
                <td>Título</td>
                <td><input style="margin: auto; width: 40%; padding: 6px; color: black;" type="text" name="titulo"></td>
              </tr>
              <tr>
                <td>Mensaje</td>
                <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
              </tr>
              <tr>
                <td><input style="margin: auto; width: 100%; padding: 10px; color: white; background-color: red; border-radius: 10px;" type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
              </tr>
        </form>
    </table>
  </aside>
</body>

      <div class="footer-container">
          <footer class="wrapperfooterfixed">
              <h3>Proyecto Registro de Bicicetas 2017</h3>
          </footer>
      </div>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

          <script src="js/main.js"></script>
</html>