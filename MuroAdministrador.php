<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="css/MuroAdministrador.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  
		var codigo=<?php echo $_POST['id'];?>;
		$("#Medio").load('Secciones.php');	
		}
	});
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){
	  
	  
	  
	  var codigo=<?php echo $_POST['id'];?>;
      $("#Medio").load(href,{id:codigo});		 
		 
      });
   });
});
</script>

</head>

<body>
<?php   
include('Conexion.php');
  $cod=$_POST['id'];  
 
  $sql=$cn->prepare('SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo');
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['foto'];?> width="130" height="106" class="foto1" /></span>
  <p class="letra1"><strong>Administracion Personalizada</strong></p>
		 
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAdministrador.php" class="letra2">Registrar Administrador</a>
	</p>
	
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAlmacen.php" class="letra2">Registrar Almacen</a>
	</p>
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarAlmacenadoEn.php" class="letra2">Registrar Almacenado En</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarATrabaja.php" class="letra2">Registrar A Trabaja</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCarrito.php" class="letra2">Registrar Carrito</a>
	</p
	
	><p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCliente.php" class="letra2">Registrar Cliente</a>
	</p>
	
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarContrato.php" class="letra2">Registrar Contrato</a>
	</p>
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarCuenta.php" class="letra2">Registrar Cuenta</a>
	</p>
	
	<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarDepartamento.php" class="letra2">Registrar Departamento</a>
	</p>
	
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarEmpleado.php" class="letra2">Registrar Empleado</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarEmpresa.php" class="letra2">Registrar Empresa</a>
	</p>
	
		<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarEnvio.php" class="letra2">Registrar Envio</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarEstado.php" class="letra2">Registrar Estado</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarEstaEn.php" class="letra2">Registrar Esta En</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarESupervisa.php" class="letra2">Registrar E Supervisa</a>
	</p>
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarETrabaja.php" class="letra2">Registrar E Trabaja</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarLista.php" class="letra2">Registrar Lista</a>
	</p>
	
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarOferta.php" class="letra2">Registrar Oferta</a>
	</p>
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPago.php" class="letra2">Registrar Pago</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPersona.php" class="letra2">Registrar Persona</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPersonaActiva.php" class="letra2">Registrar Persona Activa</a>
	</p>
	
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPersonaPasiva.php" class="letra2">Registrar Persona Pasiva</a>
	</p>
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPertenece.php" class="letra2">Registrar Pertenece</a>
	</p>
	
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarProducto.php" class="letra2">Registrar Producto</a>
	</p>
	
	
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarProvee.php" class="letra2">Registrar Provee</a>
	</p>
	
			<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarProveedor.php" class="letra2">Registrar Proveedor</a>
	</p>
	
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPTiene.php" class="letra2">Registrar P Tiene</a>
	</p>
	
	
						<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarPublicidad.php" class="letra2">Registrar Publicidad</a>
	</p>
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarRestriccion.php" class="letra2">Registrar Restriccion</a>
	</p>
	
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarSeccion.php" class="letra2">Registrar Seccion</a>
	</p>
	
	
				<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarServicio.php" class="letra2">Registrar Servicio</a>
	</p>
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarSucursal.php" class="letra2">Registrar Sucursal</a>
	</p>
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTarjeta.php" class="letra2">Registrar Tarjeta</a>
	</p>
	
						<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTieneMetodo.php" class="letra2">Registrar Tiene Metodo</a>
	</p>
	
							<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTienePago.php" class="letra2">Registrar Tiene Pago</a>
	</p>
	
					<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTieneProducto.php" class="letra2">Registrar Tiene Producto</a>
	</p>
	
						<p>
	<img src="Imagenes/nike.jpg" class="img"/><a href="RegistrarTrabajador.php" class="letra2">Registrar Trabajador</a>
	</p>
	
	
	
	
	
	
	


	
 
		  
	<p class="letra1"><strong>Conversacion</strong></p>	
	 

	
	
	
	
	
	<p>
	<img src="Imagenes/iconos-messenger1.jpg"  style="width:21px; height:19px;"  class="img"/>
	<a href="untitled4.php"  class="letra2">Chat Grupal</a>
	</p>	 
	
		
	
</div>	 
   
<div id="Medio" style="width:838px; margin:10px; padding:0px; float:left; margin-left:8px;border:1px #E5E5E5 solid;">					 
</div>

</body>
</html>
