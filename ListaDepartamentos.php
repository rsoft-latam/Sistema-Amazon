<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
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




<?php 
    include("Conexion.php");

	$sql=$cn->prepare('SELECT * FROM departamento');	
	$sql->execute();		
	
    while($op=$sql->fetch())	 	
    {?>
	<div style="width:280px; float:left; margin-top:10px; margin-left:30px;">
	<div><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold; color:#DF7000"><?php echo $op['nombre']; ?></label>
	</div>   
            
        	      <ul style=" list-style:none;">

		<?php 
 	    $sql2=$cn->prepare('SELECT * FROM seccion WHERE codigo_departamento=:CodigoDepartamento ');	
	    $sql2->execute(array(':CodigoDepartamento'=>$op['codigo_departamento']));		
         while($op2=$sql2->fetch())	 	
         {?>
 
       
	
		 <li><a href="MostrarProductos.php?id=<?php  echo $op2['codigo_seccion'];?>" style="color:#004891; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px;" class="MostrarSeccion"><?php echo $op2['nombre']; ?> </a> </li>
	  


	     <?php 
	     }
		
	     ?>
         </ul>


    </div>
	<?php 
	
	}
	?>
	
	
	</body>
	</html>