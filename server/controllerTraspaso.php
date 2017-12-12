<?php

	include ("../library/conexion.php");
    
    if(!isset($_SESSION)) 
	{ 
		session_start(); 
    } 
    
	//$_SESSION['valido']= false;
	$Idbicicleta = trim ($_POST['IdBicicleta']);
    $cedulaDestino = trim ($_POST['cedulaDestino']);




	   /*validacion de campos requeridos*/
		if (empty($Idbicicleta)|| $Idbicicleta=="Seleccion"|| empty($_SESSION['s_usuario']))
		{
			//echo('validacion');
			header ('Location: ../traspasoBicicletas.php');
			$_SESSION['ERROR_HANDLER'] = "Por favor seleccione una bicicleta.";
			session_start();
            die();
           
		}
		else
		{
		       //valido traspaso
				$sql = "SELECT 1 FROM Traspaso where cedulaOrigen = '".$_SESSION['s_cedula']."' and cedulaDestino = '$cedulaDestino'";
				$result =  mysqli_query($conexion, $sql);


				/*Si no existe trapaso*/
				if(mysqli_num_rows($result) == 0)
				{
					
                                
                        /*Registro Alerta*/			
                            $sql = "INSERT INTO Traspaso (IdBicicleta,cedulaOrigen, CedulaDestino, Estado) 
                            VALUES('$Idbicicleta','".$_SESSION['s_cedula']."','$cedulaDestino', 'Pendiente')";
                           
                            if(mysqli_query($conexion, $sql))
                            {
                                
                                //echo("Error description: " . mysqli_error($conexion));                        							
                                $_SESSION['ERROR_HANDLER'] = "Traspaso registrado con exito y a la espera de aprobacion.";
                                header ('Location: ../traspasoBicicletas.php');
                                die();					
                            }
                            else
                            {
                  
                                $_SESSION['ERROR_HANDLER'] = "Error registrando Traspaso. Por favor intente de nuevo.";
                               // $_SESSION['ERROR_HANDLER'] = $sql;
                                header ('Location: ../traspasoBicicletas.php');
                            }

                    }else{							
                    header ('Location: ../traspasoBicicletas.php');
                    $_SESSION['ERROR_HANDLER'] = "El traspaso ya fue creado con anterioridad.";
                    die();
                    }
		}			 		   
		 

?>