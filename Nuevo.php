<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>

<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<script type="text/javascript" language="javascript" src="DataTables/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>

<script>
$ (document).ready(
function() 
{
$('table.sortable tbody tr:odd').addClass('odd');
$('table.sortable tbody tr:even').addClass('even');
}
);
</script>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "Nothing found - sorry",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Erster",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Letzter"
				}			
        }
    } );
} );
</script>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );
</script>




<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo4 {font-size: 12px}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo5 {color: #000000}
.Estilo6 {color: #0000FF}
-->
.centro{

margin:5px auto;
}
</style>
</head>

<body>
<div style="position:absolute; z-index:1;">

<p>
<?php
include("conexion.php");
/* isset($_POST['B']); */
	
?>
</p>
<div align="center"><a href="NuevoImagen.php" class="Estilo35">Nuevo</a></div>
<div align="center" class="centro" >
  <table width="426" height="129" border="0" cellpadding="3" cellspacing="4" id="example" class="display compact">
  <thead>
    <tr >
      <td width="100" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Codigo Imagen</span></td>
	  <td width="107" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Codigo Cuenta</span></td>
      <td width="70"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Imagen</span></td>
	  <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Comentario</span></td>
      <td width="280"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Acciones</span></td>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td width="100" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Codigo Imagen</span></td>
	  <td width="107" height="25"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Codigo Cuenta</span></td>
      <td width="70"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Imagen</span></td>
	  <td width="130"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Comentario</span></td>
      <td width="280"><span class="Estilo15 Estilo1 Estilo4 Estilo5 Estilo6">Acciones</span></td>
    </tr>
  </tfoot>
 
     
    <?php 
  $sql=mysql_query("SELECT * FROM imagen",$cn);
  while($op=mysql_fetch_array($sql))	 	
   { ?>
    <tr bgcolor="#D7D7D7">
      <td height="63" class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['CodigoImagen'];?></span></td>
	   <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['CodigoCuenta'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><img src=<?php echo $op['Foto'];?> width="54" height="48" style="padding:2px; border:1px #D1D1D1 solid; margin:1px;"/></span></td>	  
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['Comentario'];?></span></td>
      <td class="Estilo34 Estilo1 Estilo4">
	  
	  <a href=""><img src="Imagenes/basura-icono-3648-48.png" width="26" height="25" /></a>
	  <a href=""><img src="Imagenes/icon18_edit_allbkg.gif" width="27" height="26" /></a>	  </td>
    </tr>  
    <?php  }  ?>
  </table>
</div>

</div>
</body>
</html>
