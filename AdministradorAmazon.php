<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Cuenta Administrador</title>

<link rel="stylesheet" href="css/Administrador.css" type="text/css" />	
<link href="Jquery-ui/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>


	
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>	
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>	





<script>
function realizaBusqueda(){
    
        var codigo = $('#Buscar').val();                
    
		CargarBusqueda();			
		function CargarBusqueda()
		{  	
		$("#Medio").load('Busqueda.php',{id:codigo});		
		}	
       
}
</script>		

<script type="text/javascript">
	$(document).ready(function() 
	{							
	
		setInterval(CargarContactos,2000);
			
		CargarCuerpo();			
		
		function CargarCuerpo()
		{  var codigo=<?php echo $_GET['id']; ?>;		
		$("#Cuerpo").load('MuroAdministrador.php',{id:codigo});		
		}
		
		function CargarContactos()
				{
				
		var codigo=<?php echo $_GET['id']; ?>;
		
		$("#Contactos").load('Contactos.php',{id:codigo});					
				}			
						
	});
	     	
	</script>	

<script type="text/javascript">
$(document).ready(function()
{
   $("#nav a").each(function(){
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});
	  
      $(this).click(function(){
	     var codigo=<?php echo $_GET['id'];?>;
         $("#Cuerpo").load(href,{id:codigo});		 
      });
   });
});		
</script>

<script type="text/javascript">
$(document).ready(function()
{
      $("#Aula").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      });	  
	  
	  $("#Biblioteca").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      });
	  
	  $("#Videos").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      }); 
	  
      $("#Muros").each(function()
	  {
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
		  $(this).click(function()
		  {
			 var codigo=<?php echo $_GET['id'];?>;
			 $("#Cuerpo").load(href,{id:codigo});		 
		  });
      }); 
   
});		
</script>
	
			
</head>

<body>	
<?php	   
  include('Conexion.php');
  $cod=$_GET['id'];
  
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo");
  $sql->execute(array(':Codigo' => $cod ));
  $op= $sql->fetch();

  $codigo_persona=$op['codigo_persona']; 
  
  $sql3=$cn->prepare("SELECT * FROM persona WHERE codigo_persona=:codigo_persona");
  $sql3->execute(array(':codigo_persona'=>$codigo_persona));
  $op3=$sql3->fetch();   
?>
  
<div class="cabeza"> 
<ul id="menu">
 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">   
     <tr>	 
       <td width="176" ><img src="Imagenes/Logo Amazon2.jpg" width="98" height="27" style="float:left; margin-top:3px; margin-left:40px;"/></td>	   
       <td width="25"></td>
	   <td width="272"><input name="Buscar" id="Buscar" type="text" placeholder="        Busca productos, anuncios y cosas " style="width:250px;" onclick="realizaBusqueda();"/></td>
	   
  <td width="139"><a href=""><img src="Imagenes/Dibujoffffddd.JPG" width="25" height="26"/></a></td>
  
  <td width="29">&nbsp;</td>
  	   
  <td width="29">&nbsp;</td>
  	   
  <td width="29">&nbsp;</td>
	   	   
  <td width="29">&nbsp;</td>	   
  <td width="71"><img src=<?php echo $op['foto'];?> width="30" height="26" class="foto2"/></td>      
  <td width="65">	
    
  <li><strong><?php echo $op['nick'];?></strong></li>  </td>
       
  <td width="100">
  <li><strong>Contacto</strong>
    <ul id="lista1">
      <li> <a href="">Servicios</a></li>
	  <li> <a href="">Listas</a></li>
      <li> <a href="Close.php?id=<?php echo $cod;?>" >Cerrar Sesion</a></li>
    </ul>
  </li>   </td>
	   
  <td width="65">
   <li><strong>Inicio</strong>	     
         <ul id="nav">
           <li> <a href="DatosPersonales2.php">Configuracion</a></li>
           <li> <a href="">Mensajes</a></li>
           <li> <a href="">Alerta de Stock</a></li>         
         </ul>
	   </li>  </td>	 
  </tr>
  </table>
</ul>  
 
</div>
  
  
<div id="Cuerpo" class="Cuerpo">
</div>
 
 
<!--class="Contactos content mCustomScrollbar" data-mcs-theme="minimal-dark"-->
 
<div id="Contactos" class="Contactos" >
</div>	
	
		
</body>
</html>