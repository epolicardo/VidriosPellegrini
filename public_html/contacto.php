<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Vidrios Pellegrini - Contacto</title>
	<!--mobile apps-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="vidrios, vidrio, plano, cordoba, argentina, pellegrini, templados, templado, horizontal, construccion, arquitectura, diseño, transparencia, arte, laminado, seguridad, vidrio seguro, especificaciones, tecnicas" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--mobile apps-->
	<!--Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/prettySticky.css" type="text/css">
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smoth-scrolling-->
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
		<!--banner-->
		<div id="home" class="banner about-banner">
			<div class="banner-info">
				<!--navigation-->
				<div class="top-nav">
					<nav>
						<div class="container">
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1><a href="index.php"><img src="images/Vidrios%20Pellegrini%20-%20Isotipo.png" width="400px"></a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-right">
									<li><a href="index.php" class="link-kumya"><span data-letters="Inicio">Inicio</span></a></li>
									<li><a href="nosotros.php" class="link-kumya"><span data-letters="Nosotros">Nosotros</span></a></li>
									<li><a href="productos.php" class="link-kumya"><span data-letters="Productos">Productos</span></a></li>
									<li><a href="servicios.php" class="link-kumya"><span data-letters="Servicios">Servicios</span></a></li>
									<li><a href="obras.php" class="link-kumya"><span data-letters="Obras">Obras</span></a></li>
									<li><a href="contacto.php" class="link-kumya  active scroll"><span data-letters="Contacto">Contacto</span></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</nav>
				</div>
				<!--//navigation-->
				<div class="banner-text">
					<h2>Estamos a su disposición, esperamos su consulta</h2>
				</div>
			</div>
		</div>
		<!--//banner-->
		<!-- contact -->
		<div class="contact">
			<div class="container">
				<div class="contact-grids">
					<div class="col-md-6 contact-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d226.85127278470839!2d-64.18466772848075!3d-31.406177222302393!2m2!1f232.60204991174032!2f45!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x9432987bdb131c29%3A0xeb6385ff19482080!2sLa+Tablada+403%2C+C%C3%B3rdoba!5e1!3m2!1ses!2sar!4v1465352062589" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
					<div class="col-md-6 contact-grid">
						<h3 class="title">Cont&aacute;ctenos</h3>
						<p>D&eacute;jenos su consulta en el formulario a continuaci&oacute;n, y nos pondremos en contacto a la brevedad.</p>



						<form method="POST" action="mail.php" class="form-signin">
							<h2 class="form-signin-heading">Cont&aacute;ctenos</h2>
							<input type="hidden" name="recipient" value="emilianopolicardo@gmail.com">
							<input type="hidden" name="subject" value="Datos del Formulario">
							<input type="hidden" name="redirect" value="../contacto.php">
							<input type="text" name="realname" class="input-block-level" placeholder="Nombre">
							<input type="text" name="email" class="input-block-level" placeholder="Correo">
							<input type="text" name="phone" class="input-block-level" placeholder="Tel&eacute;fono">
							<textarea rows="6" name="Mensaje" placeholder="Mensaje"></textarea>
							<button class="btn btn-large btn-primary" type="submit" text-align="center">Enviar</button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address">
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"><a href="https://goo.gl/maps/d2yaD9njorB2" target="_blank"></i>La Tablada 403 - C&oacute;rdoba</a>
						</li>
						<li><i class="phon">Tel&eacute;fonos:</i> <a href="tel:3514031632" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;"><span>351 354 9607</span></a>
						</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@vidriospellegrini.com.ar">info@vidriospellegrini.com.ar</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php
  include("footer.php");
  ?>
			<!--//footer-->
			<!-- script-for prettySticky -->
			<script src="js/prettySticky.js"></script>
			<!--//script-for prettySticky -->
			<!-- Bootstrap core JavaScript
    ================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="js/bootstrap.js"></script>
</body>

</html>