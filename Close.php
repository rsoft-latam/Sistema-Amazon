<?php 
include('Conexion.php');
$cod=$_GET['id'];
$es="Inactivo";		
		
		$sql=$cn->prepare('UPDATE estado SET nombre=:Estado WHERE codigo_cuenta=:Codigo');	
	    $sql->execute(array(':Codigo' => $cod,':Estado' => $es ));	
	    header('Location: Inicio.php');	
?>
