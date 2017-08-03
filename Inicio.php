 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema Amazon</title>
<link rel="stylesheet"  href="css/Inicio.css" />


<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>


 <script>
        jQuery(document).ready(function ($) {            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
     });
    </script>




<script type="text/javascript">
	$(document).ready(function() 
	{							
	
			
		CargarSeccion();			
		
		function CargarSeccion()
		{ 	
		$("#CuerpoInicio").load('Secciones.php');		
		}
		
	
						
	});
	     	
	</script>	

</head>

<body>

<?php	   
  include('Conexion.php');
   
  $sql=$cn->prepare("SELECT * FROM publicidad");
  $sql->execute();
  

 ?>

<div id="Cabeza">
<img src="Imagenes/Logo Amazon2.jpg" width="167" height="48" style="float:left; margin-top:16px; margin-left:40px;"/>
<img src="Imagenes/mi_umsa.jpg" width="167" height="55" style="float:left; margin-top:7px; margin-left:40px;"/>

	<form class="form" action="Login.php" method="post" style="width:350px; float:right; padding:0px; margin-bottom:3px; margin-top:3px;">
		
		<table width="340" border="0" cellpadding="0" cellspacing="0" style="margin:0px; padding:0px;">
  <tr>
    <td width="131" height="21"><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; margin:2px;">Correo Electronico</label></td>
    <td width="16">&nbsp;</td>
    <td width="120"><label style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; margin:2px;">Contraseña</label></td>
    <td width="19">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr>
    <td><input type="text" name="T1" required="true"  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000; " /></td>
    <td>&nbsp;</td>
    <td><input type="password" name="T2" required="true"  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000000;  "/></td>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; background:#666666; border:1px #000000 solid; height:25px; cursor:pointer; font-weight:bold;" value="Acceder"/></td>
  </tr>
  <tr>
  <td><a href="" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF; float:left; margin-left:5px; margin:2px;">Registrase</a></td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>  
  </tr>
</table>

			
			
		
	</form>
	
	
</div>

<div id="Antes">

</div>

<div id="Menu1">

	<ul id="Menu">
	       <li> <a href="">Ofertas</a></li>
           <li> <a href="">Trabaja en Amazon</a></li>
           <li> <a href="">Lista de Deseos</a></li>
           <li> <a href="">Amazon es tuyo</a></li>
           <li> <a href="">Amazon Web Sevices</a></li>         
           <li> <a href="">Vende en Amazon</a></li>
		   <li> <a href="">Cable</a></li>
	</ul>

</div>







<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden; visibility: hidden; margin-top:1px; margin-bottom:20px;">


 <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden;">
 <?php 
 	   	
         while($op= $sql->fetch())	 	
         {?>    
	
		
<div data-p="225.00" style="display: none;"> 
<a href="RegistrarVisita.php?id=<?php echo $op['codigo_empresa'];?>"><img data-u="image" src="<?php echo $op['imagen'];?>" /></a>
<div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">
La mejor ropa</div>
</div>
	
		   
		  <?php 
	     }
		
	     ?>

<a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a></div>
<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
<div data-u="prototype" style="width:16px;height:16px;"></div>
</div>
<span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span> <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span> </div>

<div id="CuerpoInicio">
</div>

</body>
</html>
