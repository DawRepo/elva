<?php
require_once './connection.php';

$_SESSION['usuario'] = "";
$_SESSION['nombre'] = "";
$_SESSION['apellido'] = "";
$_SESSION['email'] = "";
$_SESSION['telefono'] = "";

empty($_SESSION['usuario']);
empty($_SESSION['nombre']);
empty($_SESSION['apellido']);
empty($_SESSION['email']);
empty($_SESSION['telefono']);

if(isset($_SESSION)){
	session_destroy();
}

header('location:../index.php');

?>