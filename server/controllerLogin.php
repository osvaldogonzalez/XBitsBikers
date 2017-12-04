<?php

include ("../library/conexion.php");


if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
	$_SESSION['S_VALID']= true;
	$usuario = $_POST['Usuario'];
	$passsowrd = trim ($_POST['Password']);    
    //$hash_pass = md5($passsowrd);
							
	if (empty($usuario) || empty($passsowrd))
	{
		header ('Location: ../login.php');
		$_SESSION['ERROR_HANDLER'] = "Por favor complete los campos";
		die();
	}
	else
	{	
		$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and Contrasena ='$passsowrd' and Estado = 1";
        $result = mysqli_query($conexion, $sql);
               
        //SELECT `IdUsuario`,`Nombre`, `Apellido`, `Direccion`, `Cedula`, `Usuario`, `Email`, `Contrasena`, `idPerfil`, `Telefono`, `Estado` FROM `usuario` 

		if(mysqli_num_rows($result)> 0)
		{
            echo(mysqli_num_rows($result));
			$row = mysqli_fetch_array($result, MYSQLI_BOTH);
			$_SESSION['S_VALID']= true;
			$_SESSION['s_usuario'] = $row['IdUsuario'];
			$_SESSION['s_nombre'] = $row['Nombre'];
			$_SESSION['s_apellido']= $row['Apellido'];
			$_SESSION['s_direcciom'] = $row['Direccion'];
			$_SESSION['S_ROLE'] = $row['Cedula'];
            $_SESSION['s_email'] = $row['Email'];
            $_SESSION['s_idPerfil'] = $row['idPerfil'];
            $_SESSION['s_telefono'] = $row['Telefono'];
            $_SESSION['s_estado'] = $row['Estado'];

			header ('Location: ../informacionBicicletas.php');//CAMBIAR PAGINA
			die();
		}
		else
		{		
			$_SESSION['S_VALID'] = false;
			$_SESSION['ERROR_HANDLER'] = "Nombre de usuario o contraseña no válidos.";
			header ('Location: ../login.php');
			die();
		}
	}

?>