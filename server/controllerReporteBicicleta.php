<?php

	include ("../library/conexion.php");
    
    if(!isset($_SESSION)) 
	{ 
		session_start(); 
    } 
    
	//$_SESSION['valido']= false;
	$Idbicicleta = trim ($_POST['IdBicicleta']);
	$Estado = trim ($_POST['Estadobici']);
	$Fecha = trim ($_POST['Fecha']);
	$DescripcionAlerta = trim ($_POST['DescripcionAlerta']);
    $UbicacionRobo = trim ($_POST['UbicacionRobo']);
    echo ($Fecha);


	   /*validacion de campos requeridos*/
		if (empty($Idbicicleta)|| $Idbicicleta=="Seleccion"|| empty($_SESSION['s_usuario']))
		{
			//echo('validacion');
			header ('Location: ../reporteBicicletas.php');
			$_SESSION['ERROR_HANDLER'] = "Por favor seleccione una bicicleta.";
			session_start();
            die();
           
		}
		else
		{
		       //valido alerta
				$sql_alerta = "SELECT 1 FROM Alerta where IdBicicleta = '$Idbicicleta'";
				$resultalerta =  mysqli_query($conexion, $sql_alerta);


				/*Si no existe reporte*/
				if(mysqli_num_rows($resultalerta) == 0)
				{
					
                                
                        /*Registro Alerta*/			
                            $sql = "INSERT INTO Alerta (IdBicicleta, Estado, Fecha, DescripcionAlerta, UbicacionRobo, IdUsuario) 
                            VALUES('$Idbicicleta', '$Estado','$Fecha','$DescripcionAlerta','$UbicacionRobo','".$_SESSION['s_usuario']."')";
                            echo $sql;
                            if(mysqli_query($conexion, $sql))
                            {
                                echo 'entro3';
                                //echo("Error description: " . mysqli_error($conexion));                        							
                                $_SESSION['ERROR_HANDLER'] = "Reporte registrado con éxito.";
                              //  header ('Location: ../reporteBicicletas.php');
                                die();					
                            }
                            else
                            {
                                echo 'entro4';
                                $_SESSION['ERROR_HANDLER'] = "Error registrando Alerta. Por favor intente de nuevo.";
                                $_SESSION['ERROR_HANDLER'] = $sql;
                                header ('Location: ../reporteBicicletas.php');
                            }

                    }else{							
                    header ('Location: ../reporteBicicletas.php');
                    $_SESSION['ERROR_HANDLER'] = "La alerta ya fue notificada anteriormente.";
                    die();
                    }
		}			 		   
		 

?>