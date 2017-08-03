<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/Mensajes.css" type="text/css"/> 
<title>Mensajes</title>


</head>

<body bgcolor="#EAEAEA">



<?php 
include("Conexion.php");
//header('refresh:4; url=Mensajes.php');
//$consulta=mysql_query("SELECT * FROM mensaje ORDER BY CodigoMensaje ASC ",$cn);

$consulta=$cn->prepare("SELECT * FROM cuenta,chat WHERE cuenta.codigo_cuenta=chat.codigo_cuenta ORDER BY chat.codigo_chat ASC");
$consulta->execute();
while($res=$consulta->fetch())
{	
?>
<div style="clear:both; width:500px;  margin-left:90px;">

<img src=<?php echo $res['foto'];?> width="55" height="52" style="border-radius:100px; border:1px #003A75 solid; float:left; padding:1px; margin-bottom:5px;"/>
<div style="width:400px;  float:left; margin-bottom:10px; margin-left:20px;">

<div id="globo">

<label style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#002851; margin:0px; padding:0px;">
<?php echo $res['nick'];?></label>
<br />
<label style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; margin:0px; padding:0px;">
<?php echo $res['mensaje'];?></label>
<label style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#000000; margin:0px; padding:0px;">
<br /><?php echo $res['fecha'];?></label>
<label style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#000000; margin:0px; padding:0px;">
<br /><?php echo $res['hora'];?></label>
</div>

</div>


</div>
<?php
}

?>

</body>
</html>
