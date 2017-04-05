<?php
    SESSION_START();
    include 'conexion.php';
    if(ISSET($_SESSION['usuario'])) {
        echo '<script> window.location="panel.php"; </script>';
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <form class="form-signin" method="POST" action="validar.php" >
            <center><h2 class="form-signin-heading">LOGIN</h2></center>

            <label for="inputUsuario" class="sr-only">usuario</label>
            <input type="text" name="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                      
            <label for="inputpass" class="sr-only">password</label>
            <input type="password" name="password" id="inputpass" class="form-control" placeholder="Password" required autofocus>
                        
            <button type="submit" name="btn_login" class="btn btn-lg btn-primary btn-block boton" style="">Entrar</button>

            <a href="recuperar_pass.php">Recuperar Password</a>
        </form>

    </div>
    <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>