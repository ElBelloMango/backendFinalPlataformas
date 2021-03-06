<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Shingeki No Kyojin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Music Buzz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    
	<!--//webfonts-->
	<script src="js/pristine.js"></script>
	<script src="js/pristine.min.js"></script>
</head>

<body>
	<!-- header -->
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="js/referencias.js"></script>
	<script src="js/logeo.js"></script>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="javascript:void(0)">
					SNK
				</a>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<!-- Login -->
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item" id="frm">
								<input type="checkbox" id="show">
								<label for="show" class="show-btn"><a class="nav-link">Iniciar Sesion</a></label>
								<div class="container1">
									<label for="show" class="close-btn fas fa-times" title="close"></label>
									<div class="text">Inicio de Sesion</div>
									<form novalidate class="form1" id="form-demo">
										<div class="data">
											<label>Correo</label>
											<input type="text" id="email" name="email" required>
										</div>
										<div class="data">
											<label>Contrase??a</label>
											<input type="password" id="password" name="password" required>
										</div>
										<div class="btn">
											<input type="button" id="logear" name="logear" value="Iniciar Sesion">
										</div>
										<div class="signup-link">
											Todavia no eres un miembro? <br> <a href="/registro">Registrate
												Ahora!</a></div>
									</form>
								</div>
							</li>
						</ul>
						<!-- Login -->
						<li class="nav-item active mr-3">
							<a class="nav-link"  id="/" href="javascript:void(0)">Inicio
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" id="/acercade" href="javascript:void(0)">Informacion</a>
						</li>
						<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Desplegable
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item"
									id="/personajes" href="javascript:void(0)">Personajes</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" 
									id="/beneficios" href="javascript:void(0)">Beneficios</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="/contacto" href="javascript:void(0)">Contacto</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  id="/renderizarAPI" href="javascript:void(0)">API</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info text-right">
					<h1 class="text-uppercase">Shingeki No Kyojin</h1>
					<p class="text-white">Bienvenido a una p&aacute;gina Fandom de Shingeki No Kyojin, donde podras
						encontrar informaci&oacute;n acerca de
						esta obra maestra</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- copyright -->
	<div class="cpy-right text-center">
		<p>Carlos Andres Uribe Cortes:
			<a href="mailto:carlos.uribec@upb.edu.co">carlos.uribec@upb.edu.co</a>
		</p>
		<p>Miguel Angel Gallego Zuleta:
			<a href="mailto:miguel.gallego@upb.edu.co">miguel.gallego@upb.edu.co</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
	<script src="js/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>