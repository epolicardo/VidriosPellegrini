<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Vidrios Pellegrini</title>
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
		<div id="home">
			<div class="banner-info">

				<!--navigation-->
				<div class="top-nav">
					<nav>
						<div class="container">
							<div class="col-md-4 tabs-left">
								<div class="navbar-header logo">
									<a href="index.php"><img src="images/Vidrios%20Pellegrini%20-%20Isotipo.png" width="100%" max-width="350px"></a>
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="col-md-8 tabs-left">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-right">
										<li><a href="index.php" class="link-kumya active scroll"><span data-letters="Inicio">Inicio</span></a></li>
										<li><a href="nosotros.php" class="link-kumya"><span data-letters="Nosotros">Nosotros</span></a></li>
										<li><a href="productos.php" class="link-kumya"><span data-letters="Productos">Productos</span></a></li>
										<li><a href="servicios.php" class="link-kumya"><span data-letters="Servicios">Servicios</span></a></li>
										<li><a href="obras.php" class="link-kumya"><span data-letters="Obras">Obras</span></a></li>
										<li><a href="contacto.php" class="link-kumya"><span data-letters="Contacto">Contacto</span></a></li>
									</ul>
									<!--                                   <div class="clearfix"> </div>-->
								</div>
							</div>
						</div>
					</nav>
				</div>
				<!--//navigation-->

				<div class="banner-text">
					<!--banner Slider starts Here-->
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
							// Slideshow 3
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							});

						});
					</script>
					<!--//End-slider-script-->

					<div id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li class="banner1">
								<div class="banner-text-info">
									<h2 class="texto_con_fondo">El vidrio que necesitas</h2>
									<h3 class="texto_con_fondo">Venta y colocaci&oacute;n acompa&ntilde;ado del mejor asesoramiento t&eacute;cnico</h3>
								</div>
							</li>
							<li class="banner2">
								<div class="banner-text-info">
									<h2 class="texto_con_fondo">Presupuestos sin cargo</h2>
									<h3 class="texto_con_fondo">Nos dirigimos al lugar, para brindar la mayor presici&oacute;n</h3>
								</div>
							</li>
							<li class="banner3">
								<div class="banner-text-info">
									<h2 class="texto_con_fondo">Servicio Integral a vidrio Templado</h2>
									<h3 class="texto_con_fondo">Brindando soluciones inmediatas</h3>
									<!--     <div class="more">
                                    <a href="single.html" class="button-pipaluk button--inverted"> Conozca m&aacute;s</a>
                                </div>-->
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<!--tabs-->
		<div class="tabs">
			<div class="container">
				<div class="col-md-6 tabs-left">
					<div class="col-xs-2 tab-grid-left">
						<!-- required for floating -->
						<!-- Nav tabs-->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#Tab1" data-toggle="tab">Historia</a></li>
							<li><a href="#Tab2" data-toggle="tab">Valores</a></li>
							<li><a href="#Tab3" data-toggle="tab">Vision</a></li>
						</ul>
					</div>
					<div class="col-xs-10 tab-grid-right">
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="Tab1">
								<div class="text">
									<h3 class="title">Nuestra Historia</h3>
									<p>30 años al servicio de nuestros clientes avalan nuestros productos y servicios.</p>
									<div class="more more2">
										<a href="nosotros.php" class="button-pipaluk button--inverted">Acerquese</a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="Tab2">
								<div class="text">
									<h3 class="title">Nuestros Valores</h3>
									<p>Trabajamos para lograr la satisfaccion completa de cada cliente.</p>
									<div class="more more2">
										<a href="nosotros.php" class="button-pipaluk button--inverted">Acerquese</a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="Tab3">
								<div class="text">
									<h3 class="title">Nuestra Visión</h3>
									<p>Buscamos ser su mejor aliado al momento de tomar una importante decisión.</p>
									<div class="more more2">
										<a href="nosotros.php" class="button-pipaluk button--inverted">Acerquese</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 tabs-right ">
					<img src="images/mayorista-en-vidrios.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//tabs-->

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
