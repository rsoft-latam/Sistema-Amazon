<?php 
    include("conexion.php");
    $a1=$_POST['T1'];
	$a2=$_POST['T2'];
	$a3=$_POST['T3'];		
	$consulta="INSERT INTO cuenta (CI,CorreoElectronico,Contraseña)VALUE('$a1','$a2','$a3')";
	$sql=mysql_query($consulta,$cn);
	if($sql)
	{
	echo "<script>alert ('CREADO CON EXITO');</script>";
	header('Location: Cuenta.php');
	}
	else
	{echo "<script>alert ('FALLO');</script>";} 
	
?>