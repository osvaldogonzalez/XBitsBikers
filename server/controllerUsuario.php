<?php

	include ("../library/conexion.php");
    
    if(!isset($_SESSION)) 
	{ 
		session_start(); 
    } 
    
	$_SESSION['valido']= false;
	$_SESSION['Nombre'] = trim ($_POST['Nombre']);
	$_SESSION['Apellido'] = trim ($_POST['Apellido']);
	$_SESSION['Direccion'] = trim ($_POST['Direccion']);
	$_SESSION['Cedula'] = trim ($_POST['Cedula']);
	$_SESSION['Email'] = trim ($_POST['Email']);
	$_SESSION['Contrasena'] = trim ($_POST['Contrasena']);
	$_SESSION['Telefono'] = trim ($_POST['Telefono']);
	$_SESSION['Usuario'] = trim ($_POST['Usuario']);
	

	   /*validacion de campos requeridos*/
		if (empty($_SESSION['Email'])|| empty($_SESSION['Cedula'])|| empty($_SESSION['Usuario']) )
		{
			//echo('validacion');
			header ('Location: ../registroUsuario.php');
			$_SESSION['ERROR_HANDLER'] = "Por favor complete todos los campos.";
			session_start();
			die();
		}
		else
		{
		       //valido usuario
				$sql_usuario = "SELECT 1 FROM usuario where usuario = '".$_SESSION['Usuario']."'";
				$resultusuario =  mysqli_query($conexion, $sql_usuario);

				//valido cedula
				$sql_cedula = "SELECT 1 FROM usuario where cedula = '".$_SESSION['Cedula']."'";
				$resultcedula =  mysqli_query($conexion, $sql_cedula);

				//valido email
				$sql_email = "SELECT 1 FROM usuario where email = '".$_SESSION['Email']."'";
				$resultemail =  mysqli_query($conexion, $sql_email);


				/*Si no existe el usuario*/
				if(mysqli_num_rows($resultusuario) == 0)
				{
					/*Si no existe la cedula*/
					if(mysqli_num_rows($resultcedula) == 0)
					{

						/*Si no existe el email*/
						if(mysqli_num_rows($resultemail) == 0)
						{

							/*Registro Usuario*/			
								$sql = "INSERT INTO usuario (Nombre, Apellido, Direccion, Cedula, Usuario, Email, Contrasena, idPerfil, Telefono, Estado) 
								VALUES('".$_SESSION['Nombre']."','".$_SESSION['Apellido']."' ,'".$_SESSION['Direccion']."', '".$_SESSION['Cedula']."','".$_SESSION['Usuario']."','".$_SESSION['Email']."','".$_SESSION['Contrasena']."','1','".$_SESSION['Telefono']."','1')";
								
								if(mysqli_query($conexion, $sql))
								{
									echo '<script language="javascript">alert("juas");</script>'; 
									//echo("Error description: " . mysqli_error($conexion));
									$_SESSION['valido'] = true;								
									$_SESSION['ERROR_HANDLER'] = "Usuario registrado con éxito, proceda con el ingreso al sistema.";
									header ('Location: ../login.php');
									die();					
								}
								else
								{
									echo '<script language="javascript">alert("nojuas");</script>'; 
									$_SESSION['ERROR_HANDLER'] = "Error registrando Usuario. Por favor intente de nuevo.";
									$_SESSION['ERROR_HANDLER'] = $sql;
								}

						  }else{							
							header ('Location: ../registroUsuario.php');
							$_SESSION['ERROR_HANDLER'] = "El email ya se encuentra registrado.";
							die();
							}
						}else{						
						header ('Location: ../registroUsuario.php');
						$_SESSION['ERROR_HANDLER'] = "La cédula ya se encuentra registrada.";
						die();
				  		 }
					}else{
					header ('Location: ../registroUsuario.php');
					$_SESSION['ERROR_HANDLER'] = "El usuario ya se encuentra registrado.";
					die();

				}			 		   
		 }

?>