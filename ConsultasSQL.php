<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="css/DatosPersonales2.css" type="text/css" />	


<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>



<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarPersona();
		
		function CargarPersona()
		{
		var Codigo=<?php echo $_POST['id']; ?>;
		$("#Contenido").load('DatosPersona.php',{id:Codigo});
		}	
					
	});
</script>




<script type="text/javascript">
$(document).ready(function()
{
   $("#lista a").each(function(){
      var href = $(this).attr("href");
      $(this).attr({ href: "#"});
      $(this).click(function()
	  {
         var Codigo=<?php echo $_POST['id']; ?>;
		 $("#Contenido").load(href,{id:Codigo});
      });
   });
});
</script>



</head>

<body >
<?php
include('Conexion.php');
$Codigo=$_POST['id'];

?>


<div>


<div style="float:left; border:none;   margin:5px; width:200px; height:500px; margin-left:50px;">
        		 
		 <ul id="lista" style="list-style:none;">
		 <li> <a href="SQL2.php"><img src="Imagenes/perfil-icono-7508-48.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Servicio Mas Solicitado</a> </li> 
		 <li> <a href="DatosMedicos.php"><img src="Imagenes/sin-tc3adtulo.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Medicos</a> </li>  
	     <li> <a href="DatosAcademicos.php"><img src="Imagenes/3.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Academicos</a> </li> 
		 <li> <a href="DatosCuenta.php"><img src="Imagenes/perfil-icono-7508-48.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Cuenta</a></li> 
		 <li> <a href="DatosSociales.php"><img src="Imagenes/Dibujoffffddd.JPG" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Sociales</a> </li>  
	    
		
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 	
		 <li> <a href="DatosFamiliares.php"><img src="Imagenes/160_160_img_planes_tipos_1.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Familiares</a> </li>
		 
		 
		 
		  
		 </ul>
</div>

<div  id="Contenido" style="float:left;border-left:1px #DADADA solid; background-color:#FFFFFF;  margin-top:-17px;width:570px;"></div>

</div>

</body>
</html>

