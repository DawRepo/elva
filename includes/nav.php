<nav>
	<ul>
		<li>
			<a href="/">Inicio</a>
		</li>
		<li>
			<a href="/productos">Productos</a>
			<ul>
				<li>
					<a href="/zapatilla">Zapatillas</a>
				</li>
				<li>
					<a href="/abanico">Abanicos</a>
				</li>
				<li>
					<a href="/caja">Cajas</a>
				</li>
				<li>
					<a href="/muñeco">Muñecos</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="/contact">Contacto</a>
			<ul>
				<li>
					<a href="/email">Via Email</a>
				</li>
				<li>
					<a href="/form_contacto">Formulario Web</a>
				</li>
			</ul>
		</li>
		<?php if(!isset($_SESSION['usuario'])) { ?>
		<li id="boton">
			<script>
				$(document).ready(function() {
					$('.botonlog').click(function() {
						$('.loginform').toggleClass('loginform1');
					});
				});
			</script>
			<a class="botonlog">Entrar</a>
		</li>
		<?php }
			else {
		?>
		<li id="salir">
			<a class="botonlog" href="./server/logout.php">Salir</a>
		</li>
		<?php
			}
		?> 
	</ul>

</nav>