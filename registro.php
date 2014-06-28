<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Elva Reparaciones</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="css/stylereg.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/libs/modernizr-2.0.6.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>

	</head>
	<body>
		<?php
		include './server/connection.php';
		?>
		<!-- We've replaced the starter structure from html5boilerplate
		with our own structure, adding aside, section, and article elements. -->

		<div id="container">
			<?php
			include './includes/header.php';
			?>

			<div id="boxes">
				<!--*-->
				<section id="main" role="main">
					<article>
						<h1>Registro</h1>

						<!-- Added filler text -->
						<div id="formregistro">
							<form method="post" action="registro.php">
								<table cellpadding="3" cellspacing="1" bgcolor="#E2E2E2">
									<tr>
										<td>Usuario</td>
									</tr>
									<tr>
										<td>
										<input name="usuario" type="text" id="usuario" required/>
										</td>
									</tr>
									<tr>
										<td>Nombre</td>
									</tr>
									<tr>
										<td>
										<input name="nombre" type="text" id="nombre" required/>
										</td>
									</tr>
									<tr>
										<td>Apellido</td>
									</tr>
									<tr>
										<td>
										<input name="apellido" type="text" id="apellido" required/>
										</td>
									</tr>
									<tr>
										<td>Email</td>
									</tr>
									<tr>
										<td>
										<input name="email" type="email" id="email" required/>
										</td>
									</tr>
									<tr>
										<td>Contraseña</td>
									</tr>
									<tr>
										<td>
										<input name="pass" type="password" id="pass" required/>
										</td>
									</tr>
									<tr>
										<td>Contraseña (repetir)</td>
									</tr>
									<tr>
										<td>
										<input name="repass" type="password" id="pass" required/>
										</td>
									</tr>
									<tr>
										<td>Telefono</td>
									</tr>
									<tr>
										<td>
										<input name="telefono" type="text" id="telefono" required/>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
										<input type="submit" name="submit" id="submit" value="Registrarse"/>
										</td>
									</tr>
								</table>
							</form>
						</div>
						<?php
						//recogemos los datos enviados por POST
						if (isset($_POST['submit'])) {
							if ($_POST['pass'] == $_POST['repass']) {
								$usuario = $_POST['usuario'];
								$nombre = $_POST['nombre'];
								$apellido = $_POST['apellido'];
								$email = $_POST['email'];
								$password = $_POST['pass'];
								$telefono = $_POST['telefono'];
								$sql = "INSERT INTO usuario (usuario,nombre,apellido,email,password,telefono) VALUES ('$usuario','$nombre','$apellido','$email',sha1('$password'),'$telefono')";
								mysql_query($sql);

								echo 'Usted se ha registrado correctamente.';
							} 
							else {
								echo 'Las claves no son iguales, intente nuevamente.';
							}
						} 
						
						?>
					</article>
				</section>

				<aside>
					<!-- Added sidebar content -->

				</aside>
			</div>
			<!--*-->
			<footer>
				<p id="about">
					We're a full-service home-visit plumbing and
					welding bureau with service-people in your home town.
					Call for an estimate!
				</p>

				<div id="footerlist">
					<h3>Contact</h3>
					<ul>
						<li>
							<a href="/email">Via Email</a>
						</li>
						<li>
							<a href="/contact_form">Web Form</a>
						</li>
						<li>
							<a href="/pigeon">Carrier Pigeon</a>
						</li>
					</ul>
				</div>

				<p id="footercopy">
					All content © 2014, Elva Reparaciones.
				</p>

			</footer>

		</div>
		<!--! end of #container -->

		<script>
			window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')
		</script>

		<!-- scripts concatenated and minified via ant build script-->

		<!-- end scripts-->

	</body>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			/* Make boxes same height */
			$('#boxes').sameHeights();
		});
	</script>

</html>
