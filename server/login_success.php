<?php
require_once 'connection.php';
require_once 'acceso.php';
session_start();

if (!$_SESSION['email']) {
	header("location:main_login.php");
}
?>
<html>
<body>
Login Successful
</body>
</html>