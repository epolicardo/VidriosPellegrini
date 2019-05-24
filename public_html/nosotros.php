<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Vidrios Pellegrini | Nosotros</title>
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
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
									<li><a href="nosotros.php" class="link-kumya  active scroll"><span data-letters="Nosotros">Nosotros</span></a></li>
									<li><a href="productos.php" class="link-kumya"><span data-letters="Productos">Productos</span></a></li>
									<li><a href="servicios.php" class="link-kumya"><span data-letters="Servicios">Servicios</span></a></li>
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
					<h2>Conocénos un poco mejor</h2>
				</div>
			</div>
		</div>
		<!--//banner-->
		<!--about-->
		<div class="about">
			<div class="container">
				<h3 class="title">Nosotros</h3>
				<div class="about-info">
					<div class="col-md-12 about-grids">
						<div class="about-row">
							<div class="col-md-12 about-imgs">
								<img src="images/Vidrios%20Pellegrini%20-%20Isotipo.png" width="400px" class="img-responsive zoom-img">
							</div>


							<div class="clearfix"> </div>
						</div>
						<h4>Nuestra Historia</h4>
						<p><strong>Vidrios Pellegrini</strong> es una empresa con más de 30 años de experiencia en la venta y colocación de todo tipo de vidrio. Nuestro objetivo siempre fue brindarle al cliente el mejor servicio, trabajando con transparencia, confiable a la hora de tomar un compromiso.
							<br/> Nuestra eficacia se centra en el equipo técnico, logrando la más alta calidad en colcaci&oacute;n y asesoramiento, nuestros clientes confían plenamente no solo en el producto, sino en el trabajo finalizado, ya que a cada trabajo lo tomamos como un proceso, ofreciendo la mejor atención en cada una de sus etapas, hasta la <strong>satisfacción total del cliente.</strong>
						</p>
					</div>

					<div class="clearfix"> </div>
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
