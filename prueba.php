<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<input type="file" name="f1">
    <input type="submit" name="submit1" value="upload"></td>

<?php
mysql_connect("localhost","root","");
mysql_select_db("ti2");
if(isset($_POST["submit1"]))
{
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
mysql_query("insert into usuario(foto) values('$image')");
}
   $res=mysql_query("select * from usuario");
   
   while($row=mysql_fetch_array($res))
   {
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto'] ).'" height="200" width="200"/>';
  
       
       
   }
?>
</body>
</html>

