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

        <form class="form-signin">
            <center><h2 class="form-signin-heading">LOGIN</h2></center>

            <label for="inputUsuario" class="sr-only">usuario</label>
            <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                      
            <label for="inputpass" class="sr-only">password</label>
            <input type="password" id="inputpass" class="form-control" placeholder="Password" required autofocus>
                        
            <button class="btn btn-lg btn-primary btn-block boton" type="submit" style="">Entrar</button>

            <a href="recuperar_pass.php">Recuperar Password</a>
        </form>

    </div>
    <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>