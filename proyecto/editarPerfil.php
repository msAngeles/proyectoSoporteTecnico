<?php
  session_start();

  if(isset($_SESSION['usuario'])) {
    $nombreSesion=$_SESSION['usuario'];
?>


    <?php

	include("conexion.php");
	$query="select * from usuario where nombUsuario='$nombreSesion'";
	
	$fila=mysql_query($query);
	
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">


            <title>Principal</title>

            <!-- Bootstrap core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">


            <!-- Custom styles for this template -->
            <link href="css/dashboard.css" rel="stylesheet">

        </head>

        <body>

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                        <a class="navbar-brand" href="index.php">Home</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="perfil.php">Mi Perfil</a></li>
                            <li><a href="logout.php">Salir</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>


                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Altas</a></li>
                            <li><a href="#">Bajas</a></li>
                            <li><a href="#">Consulta</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!---->


            <div class="container-fluid">


                <div class="row col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <div class="col-xs-4 col-sm-3 sidebar">

                        <form name="form1" action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="f1" class="btn btn-lg btn-primary btn-block container" style="position:absolute; margin:185px 0px; width: 200px; height: 50px;">
                            <input class="btn btn-lg btn-primary btn-block container" type="submit" name="submit1" value="Guardar imagen" style="position:absolute; margin:250px 0px; width: 305px; height: 50px;">

                        </form>

                        <?php
mysql_connect("localhost","root","");
mysql_select_db("ti2");
if(isset($_POST["submit1"]))
{
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
mysql_query("UPDATE `usuario` SET  foto='$image' where nombUsuario='$nombreSesion'");    
    //UPDATE `usuario` SET nombre="mairim" WHERE nombUsuario="miriam"
}
   $res=mysql_query("select * from usuario where nombUsuario='$nombreSesion'");
   
   while($row=mysql_fetch_array($res))
   {
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto'] ).'" class="img‐rounded col-sm-13 col-md-13" alt="Cinque Terre" width="304" height="236">';
  
   }
?>
                    </div>


                    <!--<div class="col-xs-4 col-sm-3 sidebar">
                    <img src="data:image/jpeg;base64,'.base64_encode($fila_recorre['foto'] ).'" class="img‐rounded col-sm-13 col-md-13" alt="Cinque Terre" width="304" height="236">
                    
                </div>-->

                </div>

                <?php while($fila_recorre=mysql_fetch_array($fila))	{
 
            
            
            echo ('<div class="col-sm-9 col-sm-offset-3 col-md-10">');


                echo ('<div class="row placeholders">');
                    echo ('<h1 class="page-header">Mi Perfil</h1>');
                    echo ('<div class="col-xs-4 col-sm-5 placeholder">');
                        echo ('<form method="post" action="guardarCambios.php">');
                        
                        echo ('<div class="form‐group">');
                            echo ('<label for="nombre" 
                            style="position:relative;width:226px; margin: 0px 0px;">Nombre : </label>');
                            echo ('<input type="text" class="form‐control" id="nombre" value="'.$fila_recorre['nombre'].'" style="position: absolute;width:320px; margin: 0px 0px;" name="nombre" maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">');
                        
                            echo ('<label for="app" 
                            style="position:relative;width:226px; margin: 0px 0px;">Apellido paterno : </label>');
                            echo ('<input type="text" class="form‐control" id="app" value="'.$fila_recorre['app'].'" style="position: absolute;width:320px; margin: 0px 0px;" name="app" maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">');
                            
                            echo ('<label for="apm" 
                            style="position:relative;width:226px; margin: 0px 0px;">Apellido materno : </label>');
                            echo ('<input type="text" class="form‐control" id="apm" value="'.$fila_recorre['apm'].'" style="position: absolute;width:320px; margin: 0px 0px;" name="apm" maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">');
                        
                            echo ('<label for="telf" 
                            style="position:relative;width:226px; margin: 0px 0px;">Telefono : </label>');
                            echo ('<input type="text" class="form‐control" id="telf" value="'.$fila_recorre['telf'].'" style="position: absolute;width:320px; margin: 0px 0px;"  name="telf" pattern="[0-9]+{10}" title="solo puedes introducir numeros"  maxlength="10">');
                        
    
                            echo ('<label for="email" 
                            style="position:relative;width:226px; margin: 0px 0px;">Email : </label>');
                            echo ('<input type="text" class="form‐control" id="email" value="'.$fila_recorre['email'].'" style="position: absolute;width:320px; margin: 0px 0px;" name="email" maxlength="50" title="micuenta@ejemplo.com">');
                            
                        echo ('</div>');

     echo ('<button class="btn btn-lg btn-primary btn-block container " type="submit" name="editar" style="position: relative;width:320px; margin: 80px 320px;" >Guardar cambios</button>');
    
                        echo ('</form>');
                    echo ('</div>');
                echo ('</div>');
                
                
            echo ('</div>');
           }
?>



            </div>


            <!-- Bootstrap core JavaScript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script>
                window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')

            </script>
            <script src="js/bootstrap.min.js"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->


        </body>

        </html>

        <?php
  }else{
	 echo '<script> window.location="login.php"; </script>';
  }
?>
            <!--<form class="form‐inline formu">
            <div class="form‐group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form‐control" id="exampleInputName2" placeholder="Jane Doe">
            </div>
            <div class="form‐group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form‐control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
            </div>
            <button type="submit" class="btn btn‐default">Send invitation</button>
        </form>-->
