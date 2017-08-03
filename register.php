<?php
	
	include("Conexion.php");

	$cod=$_POST['user'];
	$message=$_POST['message'];
	
	
			
	$consulta=$cn->prepare("INSERT INTO chat(codigo_cuenta,mensaje,fecha,hora)VALUES(:Codigo,:Mensaje,CURRENT_DATE,CURRENT_TIME)");
	$consulta->execute(array(':Codigo'=>$cod,':Mensaje'=>$message));
	$result=$consulta->fetch();
	

	
	


?>