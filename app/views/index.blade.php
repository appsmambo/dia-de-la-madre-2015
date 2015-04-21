<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Las mejores madres</title>
		<link rel="canonical" href="{{url()}}/" />
		<meta property="fb:app_id" content="1573812292891806" />
		<meta property="fb:admins" content="100008010128050" />
		<meta property="og:title" content="Las mejores madres" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{url()}}/" />
		<meta property="og:image" content="{{url()}}/img/compartir.png" />
		<meta property="og:site_name" content="Gana con Ripley y Adidas" />
		<meta property="og:description" content="Ayudar tiene premio. Participa en nuestro concurso y gana un Motorola Moto E para tu mamá, y por tu imagen compartida estarás ayudando con un kilo de alimentos para los niños de aldeas infantiles." />
		<link rel="stylesheet" href="{{url()}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url()}}/css/estilos.css">
		<link rel="stylesheet" href="{{url()}}/css/componentes.css">
		<link rel="stylesheet" href="{{url()}}/css/animaciones.css">
		<link rel="stylesheet" href="{{url()}}/css/flexcrollstyles.css">
		<link rel="stylesheet" href="{{url()}}/css/video-background.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script>
			var urlBase = '{{url()}}';
			var timerInicio = null, api_fsvideo, flagIntro = false;
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#ff6702",
					backgroundColor: "#000000",
					percentage: true,
					barHeight: 2,
					minimumTime: 500,
					maxTime: 20000,
					fadeOutTime: 1000,
					onComplete: function () {
						api_fsvideo = $(".page-intro").videoBG({
							youtube:"W7pHcAtpdx0",
							poster:"img/fondos/intro.jpg"
						});
						timerInicio = new Date();
					}
				});
			});
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<script src="{{url()}}/js/modernizr.custom.js"></script>
		<script src="{{url()}}/js/jquery-1.11.2.min.js"></script>
		<script src="{{url()}}/js/jquery.mousewheel.js"></script>
		<!--script src="{{url()}}/js/bootstrap.min.js"></script-->
		<script src="{{url()}}/js/jquery.blockUI.js"></script>
		<script src="{{url()}}/js/jquery.validate.min.js"></script>
		<script src="{{url()}}/js/jquery.screwdefaultbuttonsV2.min.js"></script>
		<script src="{{url()}}/js/jquery.video-background.js"></script>
		<script src="{{url()}}/js/flexcroll.js"></script>
		<script src="{{url()}}/js/funciones.js"></script>
	</head>
	<body>
		<script>
			window.fbAsyncInit = function () {
				FB.init({
					appId: '1573812292891806',
					xfbml: true,
					version: 'v2.3'
				});
			};
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {
					return;
				}
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-61972787-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<header>
			<div class="container-fluid">
				<nav class="nav-bar clearfix">
					<div class="container-fluid contenido">
						<div class="row">
							<div class="navbar-header col-sm-3">
								<div type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<!--img src="{{url()}}/img/bar-toogle.png" /-->
								</div>
								<a class="navbar-brand logo-entel" href="#">
									<img src="{{url()}}/img/hashtag-intro.png" class="img-responsive logo-1" alt="">
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
									<li><a href="#" class="goMenu" data-seccion="4" id="menu-galeria">galería</a></li>
									<li><a href="#" class="goMenu" data-seccion="0" id="menu-video">ver video</a></li>
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
						<a class="saltar" href="#" style="margin-top:65%">
							<img src="{{url()}}/img/boton-saltar.png" alt="" class="img-responsive center-block ">
						</a>
					</div>
				</div>
			</div>
			<div class="pt-page page-inicio content-wrapper">
				<div class="container-fluid contenido">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="{{url()}}/img/titulo-hashtag.png" alt="" class="img-responsive center-block "><br><br>
							<img src="{{url()}}/img/parrafo-home-2.png" alt="" class="img-responsive center-block "><br>
							<a href="#" class="goMenu" data-seccion="2">
								<img src="{{url()}}/img/parrafo-home-3.png" alt="" class="img-responsive center-block">
							</a>
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
									<img src="{{url()}}/img/comparte-foto.png" alt="" class="img-responsive center-block">
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
				<div class="kilos-content uno hidden">

				</div>
				<div class="kilos-content dos">
					<div><span class="total">{{$total}}</span> <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content tres hidden">
					<div><span class="total">{{$total}}</span> <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content cuatro hidden">
					<div><span class="total">{{$total}}</span> <span class="kilos-small">kg</span><br/> <span class="kilos-texto">de ayuda</span></div>
				</div>
				<div class="kilos-content cinco hidden">

				</div>
				<div class="container-fluid contenido">

					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="{{url()}}/img/titulo-reto.png" alt="" class="img-responsive center-block "><br><br>
							<img src="{{url()}}/img/parrafo-participa.png" alt="" class="img-responsive center-block">
						</div>
					</div>
				</div>
			</div>
			<div class="pt-page page-galeria content-wrapper">
				<div class="container-fluid contenido">
					<p>
						<img src="{{url()}}/img/galeria-titulo.png" alt="" class="img-responsive center-block">
					</p>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<section id="galeria" class='flexcroll'>
								<div class="row">
<?php
$anchos = array('ancho-s', 'ancho-m', 'ancho-l');
$margenes = array('margen-s', 'margen-m', 'margen-l');
$contenido = array();
foreach ($participantes as $participante):
	$ancho = array_rand($anchos);
	$margen = array_rand($margenes);
	$parrafo1 = substr($participante->mensaje, 0, 126);
	$parrafo2 = substr($participante->mensaje, 126);
	$html = '<div class="contenedor-foto center-block '.$anchos[$ancho].' '.$margenes[$margen].'">';
	$html.= '<img src="'.url().'/uploads/final/'.$participante->imagen.'.'.$participante->extension.'" alt="" class="img-responsive center-block"><div class="clearfix"></div>'
			. '<p>'.$parrafo1.'<span id="elipsis-'.$participante->id.'" class="elipsis">...</span><span id="parrafo-'.$participante->id.'" class="parrafo hidden">'.$parrafo2.'</span>'.'</p>'
			. '<div class="row"><div class="col-sm-7">'
			. '<span><strong>Por: </strong>'.$participante->nombre.'</span>'
			. '</div><div class="col-sm-5">'
			. '<a data-id="'.$participante->id.'" class="pull-right ver-mas" href="#"><img class="pull-right" src="'.url().'/img/ver-mas.png" alt=""></a>'
			. '</div></div></div>';
	$contenido[] = $html;
endforeach;
$html = '';
for ($i=0; $i<count($contenido); $i+=3):
	echo $i;
	$html.=$contenido[$i];
endfor;
?>
									<div id="columna" class="col-sm-4">
										{{$html}}<br><br>
									</div>
<?php
$html = '';
for ($i=1; $i<count($contenido); $i+=3):
	$html.=$contenido[$i];
endfor;
?>
									<div class="col-sm-4">
										{{$html}}<br><br>
									</div>
<?php
$html = '';
for ($i=2; $i<count($contenido); $i+=3):
	$html.=$contenido[$i];
endfor;
?>
									<div class="col-sm-4">
										{{$html}}<br><br>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="formulario">
			<a class="btn-close">
				<img src="{{url()}}/img/btn-close-formulario.jpg" alt="">
			</a>
			<div class="container-formulario contenido">
				<p class="parrafo-1">
					<span>Comparte una foto en la que reflejes un momento con tu mamá.</span> <br/>
					La foto puede ser actual o de tu infancia, aparecer tu mamá o no, pero siempre debe
					recordarte a algún momento con ella. Recuerdos, anécdotas, frases suyas que 
					te quedaron grabadas para siempre, etc. Además, explícanos en pocas palabras 
					el porqué de la imagen, la historia que hay detrás.
				</p>
				<p class="parrafo-2">
					<span class="asterisco">*</span> Las fotos que más nos gusten serán compartidas en nuestras redes sociales. <span>¡Suerte!</span> ;)
				</p>
				<form action="#" id="registro" name="registro">
					{{ Form::token() }}
					<input type="hidden" name="video" id="video">
					<input type="hidden" name="flujo" id="flujo" val="Intro">
					<input id="foto" accept=".jpg,.png" name="foto" type="file" style="opacity:0;height:1px">
					<p class="clearfix">
						<label>Nombre<span>:</span></label>
						<input type="text" name="nombre" id="nombre" maxlength="100">
					</p>
					<p  class="clearfix">
						<label>Dni<span>:</span></label>
						<input type="tel" name="dni" id="dni" maxlength="8">
					</p>
					<p  class="clearfix">
						<label>e-mail<span>:</span></label>
						<input type="email" name="email" id="email" maxlength="100">
					</p>
					<p  class="clearfix">
						<label>Nº celular<span>:</span></label>
						<input type="text" name="celular" id="celular" maxlength="20">
					</p>
					<p  class="clearfix terminos-condiciones">
						<label >Acepto los Términos y Condiciones:</label>
						<input type="checkbox" name="newsletter" id="newsletter" value="1"/>
					</p>
					<div class="elige-tu-foto">
						<a href="#" id="archivo">
							<img id="previo" src="{{url()}}/img/fondo-preview.jpg" alt=""/>
						</a>
					</div>
					<p class="caja-texto">
						<textarea maxlength="500" name="mensaje" id="mensaje" placeholder="Coloca aquí tu texto (máx. 500 caracteres)"></textarea>
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
						<span class="total"></span> <span class="orange">kg</span><br/>
						<span class="white">de ayuda</span>
					</div>
					<img src="{{url()}}/img/comparte.png" alt="compartir"/>
					<div class="sociales-footer">
						<a class="compartir" href="#"><img src="{{url()}}/img/facebook-gracias.png" alt="facebook"/></a>
						<a target="_blank" href="https://twitter.com/home?status=http://lasmejoresmadres.pe%20Participa%20en%20nuestro%20concurso%20y%20gana%20un%20Motorola%20Moto%20E%20para%20tu%20mam%C3%A1"><img src="{{url()}}/img/twitter-gracias.png" alt="twitter"/></a>
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
							<li><a href="https://www.facebook.com/EntelPeru" target="_blank" class="facebook"></a></li>
							<li><a href="https://twitter.com/EntelPeru" target="_blank" class="twitter"></a></li>
							<li><a href="https://instagram.com/entel_peru/" target="_blank" class="instagram"></a></li>
							<li><a href="https://www.youtube.com/user/PeruEntel" target="_blank" class="youtube"></a></li>
						</ul>
						<div class="clearfix"></div>
						<a href="{{url()}}/uploads/Bases-Concurso-Dia-de-la-madre.pdf" target="_blank" class="btn-terminos hidden">Términos y Condiciones</a>
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