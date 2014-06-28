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

		<link rel="stylesheet" href="css/style1.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/libs/modernizr-2.0.6.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
		<script>
			$(document).ready(function () {
				$('#submit').click(function () {
					$.ajax({
						type:"post",
						url:"./server/acceso.php",
						data:"form".serialize()
					})
					.done(function(data) {
						if(data > 0) {
							$(location).attr('href', './indexuser.php');
						}
						else {
							alert("feo");
						}
					})
				});
			});
		</script>
	</head>
	<body>
		<?php include './server/connection.php'; include './server/seguridad.php'; ?>
		<!-- We've replaced the starter structure from html5boilerplate
		with our own structure, adding aside, section, and article elements. -->

		<div id="container">
			<?php
			include 'includes/header.php';
			?>
			<?php
			include 'includes/nav.php';
			?>

			<div id="boxes">
				<!--*-->
				<section id="main" role="main">
					<article>
						<h1>My Headline</h1>

						<div class="article_img">
							<img src="img/wave.png" width="200" height="200" alt="Wave">
							<p>
								A wave of cool plumbing services.
							</p>
						</div>
						<!-- Added filler text -->
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

					</article>
				</section>

				<aside>
					<!-- Added sidebar content -->
					<!--+-->
					<table class="loginform" width="180" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
						<tr>
							<form name="form" id="form" method="post" >
								<td>
								<table cellpadding="3" cellspacing="1" bgcolor="#E2E2E2">
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
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
										<input type="submit" name="submit" id="submit" value="Login"/>
										</td>
									</tr>
								</table>
								</td>
							</form>
						</tr>
					</table>

					<!--+-->

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
