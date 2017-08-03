<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Tu Cuenta</title>

<link rel="stylesheet" href="css/Cliente.css" type="text/css" />	
<link href="Jquery-ui/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>


	
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>	
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>	



<script type="text/javascript">
	$(document).ready(function() 
	{							
	
		setInterval(CargarComprado,2000);		
	
		function CargarComprado()
				{				
		var codigo=<?php echo $_GET['id']; ?>;		
		$("#Comprado").load('Comprado.php',{id:codigo});					
				}			
						
	});
	     	
	</script>	


<script>
function realizaBusqueda(){
    
        var codigo = $('#Buscar').val();                
    
		CargarBusqueda();			
		function CargarBusqueda()
		{  	
		$("#Cuerpo").load('Busqueda.php',{id:codigo});		
		}	
       
}
</script>				

<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarCuerpo();			
		function CargarCuerpo()
		{  	
		var codigo=<?php echo $_GET['id'];?>;
		$("#Cuerpo").load('ListaDepartamentos.php',{id:codigo});		
		}					
	});
	     	
	</script>	

<script type="text/javascript">
$(document).ready(function()
{
   $(".MostrarSeccion").each(function(){
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});	  
      $(this).click(function(){	     
         $("#Cuerpo").load(href);		 
      });
   });
});		
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("#cliente").each(function(){
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});
	  
      $(this).click(function(){
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
  
  $sql=$cn->prepare('SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo');
  $sql->execute(array(':Codigo' => $cod ));
  $op= $sql->fetch();

  $CI=$op['codigo_persona']; 
  
  $sql2=$cn->prepare('SELECT *,(persona_productos_carrito(codigo_persona))productos FROM persona WHERE codigo_persona=:ci');
  $sql2->execute(array(':ci'=>$CI));
  $op2=$sql2->fetch();   
?>
  
<div class="cabeza"> 
<ul id="menu">
 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">   
     <tr>	 
       <td width="49" ></td>	   
       <td width="141"><img src="Imagenes/Logo Amazon2.jpg" width="107" height="29"/></td>
	   <td width="272">
	
	     <input name="Buscar" id="Buscar" type="text" placeholder="        Busca productos, anuncios y cosas " style="width:330px;" onclick="realizaBusqueda();"/>	      </td>
	   
  <td width="55"><img src="Imagenes/Dibujoffffddd.JPG" width="25" height="26"/></td>
  
  <td width="57">&nbsp;</td>
  	   
  <td width="50">&nbsp;</td>
  	   
  <td width="42">&nbsp;</td>
	   	   
  <td width="42"><img src=<?php echo $op['foto'];?> width="43" height="37" class="foto2"/></td>	   
  <td width="68">
  <a href="" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; font-weight:bolder;margin-left:20px;"><img src="Imagenes/Carrito.jpg" width="45" height="32" class="foto2" style="float:right;"/></a>
    </td>      
  <td width="65">	
  <div style="float:left; margin-left:-17px; margin-top:4px; border-radius:30px; background:#FFFFFF; width:15px; height:15px;border:1px #FF0000 solid;" id="Comprado">
  
  </div>  
  <li><strong><?php echo $op['nick'];?></strong></li>  </td>
       
  <td width="100">  </td>
	   
  <td width="66">	   </td>	 
  </tr>
  
  <tr>
  <td colspan="2">
   
    <li style="float:left; margin-left:100px;"><strong>Departamentos</strong>
            <ul id="lista1">
          <?php 
 	    $sql3=$cn->prepare('SELECT * FROM departamento');	
	    $sql3->execute();		
         while($op3=$sql3->fetch())	 	
         {?>    
	
		 <li><a href="" style="color:#004891; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px;"><?php echo $op3['nombre']; ?> </a> </li>	     <?php 
	     }
		
	     ?>
            </ul>
    </li>  </td>
  <td colspan="5">
  <a href="" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; margin-left:20px;">Amazon es de <?php echo $op2['nombre'];?>  <?php echo $op2['paterno'];?>  <?php echo $op2['materno'];?></a>
  <a href="" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; margin-left:20px;">Ofertas</a>
  <a href="" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; margin-left:20px;">Cheques</a>
  <a id="cliente" href="VenderProducto.php" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; margin-left:20px;">Amazon Advantage</a>
  <a href="" style="text-decoration:none; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; color:#FFFFFF; margin-left:20px;">Ayuda</a>  </td>
  <td colspan="7">
    <li><strong>Deseos</strong>
     <ul id="lista1">
	 <li> <a href="">Muro</a></li>
	 <li> <a href="">Libreta Digital</a></li>
	 <li> <a href="">Inscripcion</a></li>
	 <li> <a href="Inicio.php" >Cerrar Sesion</a></li>
	 </ul>
  </li>
  
  
    <li><strong>Premium</strong>
      <ul id="lista1">
        <li> <a href="">Muro</a></li>
        <li> <a href="">Libreta Digital</a></li>
        <li> <a href="">Inscripcion</a></li>
        <li> <a href="Inicio.php" >Cerrar Sesion</a></li>
      </ul>
    </li>
  
  
    <li><strong>Cesta</strong>
     <ul id="lista1">
	 <li> <a href="">Muro</a></li>
	 <li> <a href="">Libreta Digital</a></li>
	 <li> <a href="">Inscripcion</a></li>
	 <li> <a href="Inicio.php" >Cerrar Sesion</a></li>
	 </ul>
  </li>
  
  
   <li><strong>Mi Cuenta</strong>
         <ul id="nav">
           <li> <a href="DatosPersonales2.php">Mi cuenta</a></li>
           <li> <a href="">Mis pedidos</a></li>
           <li> <a href="">Mi Lista de deseos</a></li>
           <li> <a href="">Mis recomendaciones</a></li>
           <li> <a href="">Mi suscripcion a Amazon Premium</a></li>
           <li> <a href="Aula.php">Gestionar conteniudo y dispositivos</a></li>
		     <li> <a href="">Mi Kindle Unlimited</a></li>
			   <li> <a href="">Mi Biblioteca musical</a></li>
			     <li> <a href="">Mi Cloud Drive</a></li>
				   <li> <a href="">Mis Apps y dispositivos</a></li>
				     <li> <a href="">Cerrar sesion</a></li>
         </ul>
	   </li>  </td>
  </tr>
  </table>
</ul>  

 
</div>
  

  
  
<div id="Cuerpo" class="Cuerpo">
</div>
 
 
<!--class="Contactos content mCustomScrollbar" data-mcs-theme="minimal-dark"-->
 

	
		
</body>
</html>