<?php
	session_start(); 
	include 'conexion.php';

		if(isset($_POST['btn_login'])){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$log = mysql_query("SELECT nombUsuario,AES_DECRYPT(pass,nombUsuario) FROM usuario WHERE nombUsuario='$usuario' and pass=AES_ENCRYPT('$password','$usuario')"); //pass blob
            //AES_DECRYPT(pass,nombUsuario)
			if (mysql_num_rows($log)>0) {
				$row = mysql_fetch_array($log);
                $_SESSION["usuario"] = $row['nombUsuario'];
				//echo '<script> window.location="panel.php"; </script>';
                echo $row['AES_DECRYPT(pass,nombUsuario)'];
                
			}
			else{
				echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
				echo '<script> window.location="login.php"; </script>';
			}
		}
?>
