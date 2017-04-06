<?php
	session_start(); 

	if(!isset($_SESSION['intentos'])) 
		$_SESSION['intentos'] = 1; 
     
	if ($_SESSION['intentos'] < 3) {

		include 'conexion.php';

		if(isset($_POST['btn_login'])){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$log = mysql_query("SELECT nombUsuario,AES_DECRYPT(pass,nombUsuario) FROM usuario WHERE nombUsuario='$usuario' and pass=AES_ENCRYPT('$password','$usuario')"); //pass blob
            //AES_DECRYPT(pass,nombUsuario)
			if (mysql_num_rows($log)>0) {
				$row = mysql_fetch_array($log);
                $_SESSION["usuario"] = $row['nombUsuario'];
				echo '<script> window.location="perfil.php"; </script>';
                //echo $row['AES_DECRYPT(pass,nombUsuario)'];
                
			}
			else{
				$_SESSION["intentos"] ++ ;
				echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
				echo '<script> window.location="login.php"; </script>';
			}
		}
	}
	else
	{
		echo '<script> alert("Usuario '.$_POST['usuario'].' bloqueado por limite de intentos superado");</script>';
		echo '<script> window.location="logout.php"; </script>';
	}	
?>
