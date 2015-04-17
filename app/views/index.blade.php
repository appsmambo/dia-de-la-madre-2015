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
		<script src="{{url()}}/js/jquery.validate.min.js"></script>
		<script src="{{url()}}/js/jquery.screwdefaultbuttonsV2.min.js"></script>
		<script src="{{url()}}/js/funciones.js"></script>
	</head>
	<body>
		<header>
			<div class="container-fluid">
				<nav class="nav-bar clearfix">
					<div class="container-fluid contenido">
						<div class="row">
							<div class="navbar-header col-sm-3">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand logo-entel" href="#">
									<img src="{{url()}}/img/logo-intro.png" class="img-responsive logo-1" alt="Entel">
									<div class="logo-2">
										<img src="{{url()}}/img/logo-entel.png" class="img-responsive" alt="Entel">
									</div>
								</a>
							</div>
							<div class="collapse navbar-collapse col-sm-9" id="bs-example-navbar-collapse-1 ">
								<ul class="nav navbar-nav hidden">
									<li><a href="#" class="active goMenu" data-seccion="1" id="menu-home">home</a></li>
									<li><a href="#" class="goMenu" data-seccion="2" id="menu-participa">participa</a></li>
									<li><a href="#" class="goMenu" data-seccion="3" id="menu-reto">el reto</a></li>
									<li><a href="#" class="goMenu" data-seccion="4" id="menu-galeria">galeria</a></li>
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
						<a class="saltar" href="#">
							<img src="{{url()}}/img/boton-saltar.png" alt="" class="img-responsive center-block">
						</a>
					</div>
				</div>
			</div>
			<div class="pt-page page-inicio content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2 col-xs-12 titulo clearfix">
									<img src="{{url()}}/img/hashtag.png" alt="" class="img-responsive">
									<p>
										<span class="home-sub-1">Las</span><br/><span class="home-sub-2">MEJORES</span><br/>madres
									<p>
								</div>
							</div>
							<p class="parraf">
								Sabemos que para ti, tu madre es la mejor, por eso queremos que nos cuentes de ella a través de una imagen. Elige el mejor momento a su lado y gana <span class="sub-1">un equipo Motorola Moto E</span> para que se lo regales. Así podrás tenerla mejor conectada, más cerca. <span class="sub-1">:)</span> 
								<span class="sub-2">¿Qué tienes que hacer para participar?</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-participa content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="row">
								<div class="col-sm-10">
									<div class="row no-padding">
										<div class="col-sm-1">
											<img src="{{url()}}/img/par-izq.png" alt="" class="img-responsive pull-right">
										</div>
										<div class="col-sm-10 titulo">
											<p>
												Comparte una foto
												<span> En la que reflejes un momento con tu mamá. </span>
											</p>
										</div>
										<div class="col-sm-1">
											<img src="{{url()}}/img/par-der.png" alt="" class="img-responsive pull-left">
										</div>
									</div>
									<div class="clearfix"></div>
									<p class="parraf">
										El fin es que quede representada de alguna forma, utiliza toda tu creatividad ;)
									</p>
								</div>
								<div class="col-sm-2">
									<a href="#" id="subeTuFoto">
										<img src="{{url()}}/img/btn-sube-tu-foto.png" class="img-responsive" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-elReto content-wrapper">
				<div class="kilos-content uno hidden" >
						
				</div>
				<div class="kilos-content dos hidden" >
					<div>180 <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content tres hidden" >
					<div>120 <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content cuatro hidden" >
					<div>20 <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content cinco" >
					
				</div>
				<div class="container-fluid contenido">
					
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="row no-padding">
								<div class="col-sm-1">
									<img src="{{url()}}/img/par-izq.png" alt="" class="img-responsive pull-right">
								</div>
								<div class="col-sm-10 titulo">
									Además, <span>nos hemos</span><br/>
									<span class="reto-1">propuesto un reto</span>
								</div>
								<div class="col-sm-1">
									<img src="{{url()}}/img/par-der.png" alt="" class="img-responsive pull-left">
								</div>
							</div>
							<div class="clearfix"></div>
							<p class="parraf">
								<span>Ayudar a nuestros niños de Aldeas infantiles</span>. Por ello, con esa foto, estarás donando <span>1 kilo de alimentos</span> que irá directamente para ellos. Cuantas más fotos, más kilos de ayuda. Convence a tus amigos para que también envíen su foto y entre todos conseguiremos el reto.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-galeria content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-9 col-sm-offset-2">
							<p>
								Aquí puedes ver todas <span class="titulo-galeria">las fotos e historias</span> que han llegado hasta ahora, 
								por si te falta inspiración para enviar la tuya <span > ;) </span> 
							</p>
							<div class="row clearfix">
								<div class="col-sm-4">
									<img src="{{url()}}/img/foto-1.jpg" alt="" class="img-responsive pull-right">
									<div class="contenido-titulo">
										<p>Mi viejita sabia que me encanta la música así que no se le ocurrió mejor cosa que regalarme una guitarra para mi cumpleaños, es la mejor.</p>
									</div>
								</div>
								<div class="col-sm-4">
									<img src="{{url()}}/img/foto-2.jpg" alt="parentesis" class="img-responsive"/>
									<div class="contenido-titulo">
										<p>Mi viejita sabia que me encanta la música así que no se le ocurrió mejor cosa que regalarme una guitarra para mi cumpleaños, es la mejor.</p>
									</div>
								</div>
								<div class="col-sm-4">
									<img src="{{url()}}/img/foto-3.jpg" alt="parentesis" class="img-responsive"/>
									<div class="contenido-titulo">
										<p>Mi viejita sabia que me encanta la música así que no se le ocurrió mejor cosa que regalarme una guitarra para mi cumpleaños, es la mejor.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="formulario">
			<a class="btn-close">
				<img src="{{url()}}/img/btn-close-formulario.jpg" alt="">
			</a>
			<div class="container-formulario">
				<p class="parrrafo-footer-1">
					<span>Comparte una foto en la que reflejes un momento con tu mamá.</span> 
					La foto puede ser actual o de tu infancia, aparecer tu mamá o no, pero siempre debe
					recordarte a algún momento con ella. Recuerdos, anécdotas, frases suyas que 
					te quedaron grabadas para siempre, etc. Además, explícanos en pocas palabras 
					el porqué de la imagen, la historia que hay detrás.
				</p>
				<p class="parrrafo-footer-2">
					<span class="asterisco">*</span> Las fotos que más nos gusten serán compartidas en nuestras redes sociales. <span>¡Suerte!</span> ;)
				</p>
				<form method="post" name="registro" id="registro">
					<p class="clearfix">
						<label>Nombre<span>:</span></label>
						<input type="text" name="nombre" id="nombre"/>
					</p>
					<p  class="clearfix">
						<label>Dni<span>:</span></label>
						<input type="text" name="dni" id="dni"/>
					</p>
					<p  class="clearfix">
						<label>e-mail<span>:</span></label>
						<input type="text" name="mail" id="mail"/>
					</p>
					<p  class="clearfix">
						<label>Nº celular<span>:</span></label>
						<input type="text" name="celular" id="celular"/>
					</p>
					<p  class="clearfix terminos-condiciones">
						<label >Acepto los Términos y Condiciones:</label>
						<input type="checkbox" name="terminos" id="terminos"/>
					</p>
					<div class="elige-tu-foto">
						<img src="{{url()}}/img/fondo-preview.jpg" alt="Elige Foto"/>
					</div>
					<p class="caja-texto">
						<input type="text" placeholder="Coloca aqui tu texto"/>
					</p>
					<p class="btn-enviar-text">
						<input type="image" src="img/btn-enviar.png" class="btn-enviar"/>
					</p>
				</form>
			</div>
		</div>
		<div class="gracias">
			<a href="#" class="btn-close">
				<img src="{{url()}}/img/btn-close-formulario.jpg" alt="">
			</a>
			<div class="content-a">
				<div class="content-b">
					<h2>
						<span>¡</span>Muchas gracias<span>!</span>
					</h2>
					<p>
						Con tu foto, hemos sumado <span>otro kilo de alimentos</span> a nuestro reto.<br/>
						Ya tenemos un total de:
					</p>
					<div class="kilos-ayuda">
						1000 <span class="orange">kg</span><br/>
						<span class="white">de ayuda</span>
					</div>
					<a class="compartir" href="#">
						<img src="{{url()}}/img/comparte.png" alt="compartir"/>
					</a>
					<div class="sociales-footer">
						<a href="#"><img src="{{url()}}/img/facebook-gracias.png" alt="facebook"/></a>
						<a href="#"><img src="{{url()}}/img/twitter-gracias.png" alt="twitter"/></a>
					</div>
				</div>
			</div> 
		</div>
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						Síguenos en
						<ul class="clearfix">
							<li><a href="#" target="_blank" class="facebook"></a></li>
							<li><a href="#" target="_blank" class="twitter"></a></li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" class="btn-terminos hidden">Términos y Condiciones</a>
					</div>
					<div class="col-sm-4 hidden">
						<a href="#" class="go" style="display:block">
							<img src="{{url()}}/img/btn-scroll.png" class="img-responsive center-block" alt=""/>
						</a>
					</div>
					<div class="col-sm-4 hidden">
						<img src="{{url()}}/img/hashtag-mama.png" class="img-responsive pull-right hashtag" alt=""/>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{url()}}/js/pagetransitions.js"></script>
	</body>
</html>