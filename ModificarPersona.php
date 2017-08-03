<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registro de Datos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

</style>

<link rel="stylesheet" type="text/css" media="all" href="css/RegistrarCuenta.css" />
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables_themeroller.css"/>

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>


 
		
			
<script>
function realizaProceso(){
        var parametros = {
               	"codigo_persona" : $('#CodigoPersona').val(),
				"dia" : $('#Dia').val(),
				"mes" : $('#Mes').val(),
				"gestion" : $('#Gestion').val()
	    };
        $.ajax({
                data:  parametros,
                url:   'CrearModificarPersona.php',
                type:  'post',
                success:  function() {   alert('Persona Registrado con Exito');  }
        });
}
</script>
		
		
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "cargando......",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "No existen registros",
		"info": "pagina _PAGE_ de _PAGES_",
	"infoEmpty": "Ningun registro disponible",
	"infoFiltered": "(filtrado de  _MAX_ total registros)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Primero",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Ultimo"
				}				
        }
    } );
} );
</script>








</head>

<body bgcolor="#F4F4F4">

<?php 
include('Conexion.php');

$consulta=$cn->prepare('SELECT * FROM persona ORDER BY codigo_persona');
$consulta->execute();
?>

<fieldset>
<legend><strong>Informacion Personal</strong></legend>
<table width="776" height="22" border="0" cellpadding="2" cellspacing="0">
          
 <tr>
     <td width="4" height="22" scope="row">&nbsp;</td>
     <td width="147" scope="row"><label for="label3">CodigoPersona:</label></td>
     <td width="180">
	 
	  <select size="1" name="Genero" id="CodigoPersona">
	
	<?php 
		
	while($result=$consulta->fetch())
	{
	?>
    <option value="<?php echo $result['codigo_persona']?>"><?php echo $result['codigo_persona'];?></option>
    <?php 
	}
	?>
	</select> 
	 
	 </td>
     <td width="13">&nbsp;</td>
     <td width="142"><label for="label2">Fecha de Nacimiento:</label></td>
     <td width="254"><select size="1" name="Mes" id="Mes">
       <option value="Enero">Enero</option>
       <option value="Febrero">Febrero</option>
       <option value="Marzo">Marzo</option>
       <option value="Abril">Abril</option>
       <option value="Mayo">Mayo</option>
       <option value="Junio">Junio</option>
       <option value="Julio">Julio</option>
       <option value="Agosto">Agosto</option>
       <option value="Septiembre">Septiembre</option>
       <option value="Octubre">Octubre</option>
       <option value="Noviembre">Noviembre</option>
       <option value="Diciembre">Diciembre</option>
     </select>
       <select size="1" name="Dia" id="Dia">
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
       </select>
       <select size="1" name="Gestion" id="Gestion">
         <option value="2000">2000</option>
         <option value="1999">1999</option>
         <option value="1998">1998</option>
         <option value="1997">1997</option>
         <option value="1996">1996</option>
         <option value="1995">1995</option>
         <option value="1994">1994</option>
         <option value="1993">1993</option>
         <option value="1992">1992</option>
         <option value="1991">1991</option>
         <option value="1990">1990</option>
         <option value="1989">1989</option>
         <option value="1988">1988</option>
         <option value="1987">1987</option>
         <option value="1986">1986</option>
         <option value="1985">1985</option>
         <option value="1984">1984</option>
         <option value="1983">1983</option>
         <option value="1982">1982</option>
         <option value="1981">1981</option>
         <option value="1980">1980</option>
         <option value="1979">1979</option>
         <option value="1978">1978</option>
         <option value="1977">1977</option>
         <option value="1976">1976</option>
         <option value="1975">1975</option>
         <option value="1974">1974</option>
         <option value="1973">1973</option>
         <option value="1972">1972</option>
         <option value="1971">1971</option>
         <option value="1970">1970</option>
         <option value="1969">1969</option>
         <option value="1968">1968</option>
         <option value="1967">1967</option>
         <option value="1966">1966</option>
         <option value="1965">1965</option>
         <option value="1964">1964</option>
         <option value="1963">1963</option>
         <option value="1962">1962</option>
         <option value="1961">1961</option>
         <option value="1960">1960</option>
         <option value="1959">1959</option>
         <option value="1958">1958</option>
         <option value="1957">1957</option>
         <option value="1956">1956</option>
         <option value="1955">1955</option>
         <option value="1954">1954</option>
         <option value="1953">1953</option>
         <option value="1952">1952</option>
         <option value="1951">1951</option>
         <option value="1950">1950</option>
       </select></td>
     <td width="8">&nbsp;</td>
 </tr>
  </table>
</fieldset>
	
		
 <fieldset>
 <table width="776" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="button" href="javascript:;" onclick="realizaProceso();return false;" value="Registrar" class="submit"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name="submit12"id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>




<div style="width:700px; margin:10px auto;">

<table width="639"  border="0" id="example">
  <thead>
    <tr >
	  <td width="128" height="25"><span class="Estilo15">Codigo Persona</span></td>
      <td width="106"><span class="Estilo15">Nombre</span></td>
      <td width="116"><span class="Estilo15">Paterno</span></td>
      <td width="125"><span class="Estilo15">Materno</span></td>
	  <td width="125"><span class="Estilo15">Genero</span></td>
      <td width="125"><span class="Estilo15">Fecha Nacimiento</span></td>
	  <td width="125"><span class="Estilo15">Nacionalidad</span></td>
	  <td width="125"><span class="Estilo15">Direccion</span></td>
	  <td width="125"><span class="Estilo15">Telefono</span></td>
	  
    </tr>
  </thead>
  <tfoot>
    <tr>
   	  	  <td width="128" height="25"><span class="Estilo15">Codigo Persona</span></td>
      <td width="106"><span class="Estilo15">Nombre</span></td>
      <td width="116"><span class="Estilo15">Paterno</span></td>
      <td width="125"><span class="Estilo15">Materno</span></td>
	  <td width="125"><span class="Estilo15">Genero</span></td>
      <td width="125"><span class="Estilo15">Fecha Nacimiento</span></td>
	  <td width="125"><span class="Estilo15">Nacionalidad</span></td>
	  <td width="125"><span class="Estilo15">Direccion</span></td>
	  <td width="125"><span class="Estilo15">Telefono</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 

include('Conexion.php');
	$sql=$cn->prepare('SELECT * FROM persona');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
 


<tr>
  <td><span class="Estilo3"><?php echo $op['codigo_persona'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['nombre'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['paterno'];?></span></td>
  <td><span class="Estilo3"><?php echo $op['materno'];?></span></td>
   <td><span class="Estilo3"><?php echo $op['genero'];?></span></td>
    <td><span class="Estilo3"><?php echo $op['fecha_nacimiento'];?></span></td>
	 <td><span class="Estilo3"><?php echo $op['nacionalidad'];?></span></td>
	  <td><span class="Estilo3"><?php echo $op['direccion'];?></span></td>
	   <td><span class="Estilo3"><?php echo $op['telefono'];?></span></td>
 
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>


</body>
</html>

