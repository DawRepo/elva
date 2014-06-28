<?php
if(!isset($_SESSION)){
	session_start();
}

$usuario = "root";
$password = "";
$servidor = "localhost"; 

//conexion a la db
$dbhandle = mysql_connect($servidor, $usuario, $password)
  or die("No se pudo conectar a MySQL<br>");
//echo "Conectado a MySQL<br>";

//seleccionamos db
$selected = mysql_select_db("proyecto",$dbhandle)
  or die("No se pudo acceder a la base de datos<br>");
//echo "Conectado a proyecto";
 
?>