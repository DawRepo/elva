<?php

require_once './connection.php';

// recogemos email y contraseña por POST

if (isset($_POST['email'], $_POST['pass'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	

	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = mysql_real_escape_string($email);
	$pass = mysql_real_escape_string($pass);

	$pass=sha1($pass);
	
	$sql = "SELECT usuario, nombre, apellido, email, telefono FROM usuario WHERE email='$email' and
	password='$pass'";
	$result = mysql_query($sql);

	if (mysql_num_rows($result)) {
		$filas = mysql_fetch_assoc($result);
			
		$_SESSION['usuario'] = $filas['usuario'];
		$_SESSION['nombre'] = $filas['nombre'];
		$_SESSION['apellido'] = $filas['apellido'];
		$_SESSION['email'] = $filas['email'];
		$_SESSION['telefono'] = $filas['telefono'];
		
		//echo "1";
		$_SESSION['autenticado'] = "si";
		
		header("location:../indexuser.php");
		
	} else {
		
		header("location:../index.php?errorusuario=si");
	}
} 
else {
	echo "nada...";
}
?>