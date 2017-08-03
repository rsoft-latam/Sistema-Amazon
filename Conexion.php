<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php
//Para conectarse a postgreSQL
$cn=new PDO("pgsql:host='localhost';port='5432';dbname='Sistema Amazon';user='postgres';password='123456'");
//Para conectarse a Mysql
//$cn=new PDO('mysql:host=localhost;dbname=sistema amazon','root','');
/*if( $cn)
{echo "<script>alert ('CONEXION EXITOSA');</script>";}
else
{echo "<script>alert ('LA CONEXION FALLO');</script>";}*/  
?>
</body>
</html>
