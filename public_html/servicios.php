<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Vidrios Pellegrini - Servicios</title>
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
									<li><a href="servicios.php" class="link-kumya active"><span data-letters="Servicios">Servicios</span></a></li>
									<li><a href="obras.php" class="link-kumya"><span data-letters="Obras">Obras</span></a></li>
									<li><a href="contacto.php" class="link-kumya"><span data-letters="Contacto">Contacto</span></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</nav>
				</div>
				<!--//navigation-->
				<div class="banner-text">
					<h2>Encontrá sólo la mejor calidad, al mejor precio</h2>
				</div>
			</div>
		</div>
		<!--//banner-->
		<!--tabs-->
		<div class="clearfix">
			<br>
		</div>
		<div>
			<div class="container">
				<div class="col-md-6 tabs-left ">
					<div class="tab-pane active" id="Tab1">
						<div class="text">
							<h3 class="title">Mantenimiento de vidrios</h3>
							<p>Somos una empresa la cual se especializa en brindar un servicio de mantenimiento de vidrios a Empresas y administraciones de edificio, con un personal técnico altamente capacitado con más de 20 años de experiencia en resolución de problemas diarios de nuestros clientes. Nuestro objetivo es bridar soluciones inmediatas por eso contamos con un personal permanente dedicado solo al servicio de ustedes, donde la resolución del problema es en menos de 24 hs. Brindamos un contacto directo para que se pueda comunicar en cualquier momento. Soluciones a problemas de cualquier tipo relacionado con nuestros productos, brindando el mejor asesoramiento técnico.</p>

						</div>
					</div>
				</div>
				<div class="col-md-6 tabs-right">
					<div class="tab-pane active" id="Tab1">
						<div class="text">
							<h3 class="title">Servicio integral de puertas templadas</h3>
							<p>Cambio de frenos aéreos e hidráulicos (Primeras marcas) cambios de repuestos necesarios para el mejor funcionamiento</p>
							<p>Mano de obra especializada, con años de experiencia avalan nuestro servicio.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix">
			<br>
		</div>

		<?php
            include("footer.php")
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
