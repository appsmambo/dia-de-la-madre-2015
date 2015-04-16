<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prueba</title>
		<link rel="stylesheet" href="{{url()}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url()}}/css/estilos.css">
		<link rel="stylesheet" href="{{url()}}/css/componentes.css">
		<link rel="stylesheet" href="{{url()}}/css/animaciones.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script>
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#ff6702",
					backgroundColor: "#ffffff",
					percentage: true,
					barHeight: 2,
					minimumTime: 500,
					maxTime: 20000,
					fadeOutTime: 1000,
					onComplete: function () {

					}
				});
			});
		</script>
		<script src="{{url()}}/js/modernizr.custom.js"></script>
		<script src="{{url()}}/js/jquery-1.11.2.min.js"></script>
		<!--script src="{{url()}}/js/bootstrap.min.js"></script-->

	</head>
	<body>
		<header>
			<div class="container-fluid">
				<nav class="nav-bar clearfix">
					<div class="container-fluid">
						<div class="row">
							<div class="navbar-header col-sm-3">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand logo-entel" href="#">
									<img src="img/logo-intro.png" class="img-responsive logo-1"/>
									<div class="logo-2">
										<img src="img/logo-entel.jpg" class="img-responsive"/>
									</div>
								</a>
							</div>
							<div class="collapse navbar-collapse col-sm-9" id="bs-example-navbar-collapse-1 ">
								<ul class="nav navbar-nav none">
									<li ><a href="#" class="active">home</a></li>
									<li><a href="#">participa</a></li>
									<li><a href="#">el reto</a></li>
									<li><a href="#">galeria</a></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<div id="pt-main" class="pt-perspective">
			<div class="pt-page page-intro">
				<div class="row contenido">
					<div class="col-sm-offset-3 col-sm-6">
						<div class="row">
							<div class="col-sm-3">
								<img src="{{url()}}/img/hashtag.png" alt="" class="img-responsive pull-right hashtag">
							</div>
							<div class="col-sm-9">
								<h1>
									<strong>mamá</strong> <span>nos</span><br>
									quiere <strong>cerca</strong>
								</h1>
							</div>
						</div>
						<br><br>
						<a class="goInicio" href="#">
							<img src="{{url()}}/img/boton-saltar.png" alt="" class="img-responsive center-block">
						</a>
					</div>
				</div>
			</div>
			<div class="pt-page page-inicio content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-9 col-sm-offset-2 col-xs-12">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1 col-xs-12 titulo clearfix">
									<img src="img/hashtag.png"/>
									<p>mamá <span>nos<br/>
											quiere</span> cerca
									<p>
								</div>
							</div>
							<p class="parraf">
								Y nosotros a ella. Por eso, te presentamos un concurso en el que si resultas ganador le regalaremos<br/>
								<span class="sub-1">un equipo Motorola Moto E</span> a tu mamá. Así podrás tenerla mejor conectada, más cerca <span class="sub-1">:)</span>
								<span class="sub-2">¿Qué tienes que hacer para participar?</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-participa content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-xs-12 clearfix">
							<div class="row">
								<div class="col-sm-10 col-xs-12 titulo clearfix">
									<div class="row">
										<div class="col-sm-11 col-sm-offset-1 col-xs-12 titulo clearfix">
											<div class="row">
												<div class="col-sm-1"><img src="img/par-izq.png"/></div>
												<p class="col-sm-10">
													Comparte una foto
													<span> En la que reflejes un momento con tu mamá. </span>
												</p>
												<div class="col-sm-1"><img src="img/par-der.png"/></div>
												<div class="clearfix"></div>

											</div>
										</div>
										<p class="parraf">
											El fin es que quede representada de alguna forma, utiliza toda tu creatividad ;)
										</p>
									</div>
								</div>
								<div class="col-sm-2">
									<img src="img/btn-sube-tu-foto.png" class="img-responsive btn-sube-foto"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-elReto">

			</div>
			<div class="pt-page page-galeria">

			</div>
		</div>
		<footer>
			<div class="container-fluid">
				<div class="sm-3">
					Síguenos en
					<ul>
						<li class="facebook"><a href="#" target="_blank"></a></li>
						<li class="twitter"><a href="#" target="_blank"></a></li>
						<li class="instagram"><a href="#" target="_blank"></a></li>
						<li class="youtube"><a href="#" target="_blank"></a></li>
					</ul>
				</div>
				<div class="sm-3 right">
					hola
				</div>
			</div>
		</footer>
		<script src="{{url()}}/js/pagetransitions.js"></script>
	</body>
</html>