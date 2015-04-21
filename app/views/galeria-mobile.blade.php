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
		<link rel="stylesheet" href="{{url()}}/css/estilos-mobile.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script>
var urlBase = '{{url()}}';
var api_fsvideo, flagIntro = false
window.addEventListener('DOMContentLoaded', function () {
	new QueryLoader2(document.querySelector("body"), {
		barColor: "#ff6702",
		backgroundColor: "#000000",
		percentage: true,
		barHeight: 2,
		minimumTime: 500,
		maxTime: 20000,
		fadeOutTime: 1000
	});
});
		</script>
		<script src="{{url()}}/js/modernizr.custom.js"></script>
		<script src="{{url()}}/js/jquery-1.11.2.min.js"></script>
		<script src="{{url()}}/js/jquery.mousewheel.js"></script>
		<!--script src="{{url()}}/js/bootstrap.min.js"></script-->
		<script src="{{url()}}/js/jquery.blockUI.js"></script>
		<script src="{{url()}}/js/jquery.validate.min.js"></script>
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
			$(document).ready(function () {
				$(".menu-mobile a").click(function () {
					var imagen = $(this).data("image");
					var href = $(this).prop("href");
					$("img", this).prop("src", imagen);
					setTimeout(location.href(href), 500);
					return false;
				});
				$(".ver-mas").click(function () {
					var id;
					id = $(this).data('id');
					$('#elipsis-' + id).fadeOut();
					$('#parrafo-' + id).removeClass('hidden');
					$(this).fadeOut();
					return false;
				});
			});
		</script>
		<script>
			(function (i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-61972787-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<header>
			<div class="container-fluid">
				<div class="container-fluid">
					<img src="{{url()}}/img/header-mobile.png" alt="" class="img-responsive hashtag pull-left">
					<a href="#galeriamenu"><img src="{{url()}}/img/bar-toogle.png" alt="" class="img-responsive hashtag pull-right"></a>
				</div>
			</div>
		</header>

		<div id="galeriacontent">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<p>
							<img src="{{url()}}/img/galeria-titulo.png" alt="" class="img-responsive center-block">
						</p>
						<section id="galeria">
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
									$html = '<div class="contenedor-foto center-block ' . $anchos[$ancho] . ' ' . $margenes[$margen] . '">';
									$html.= '<img src="' . url() . '/uploads/final/' . $participante->imagen . '.' . $participante->extension . '" alt="" class="img-responsive center-block"><div class="clearfix"></div>'
											. '<p>' . $parrafo1 . '<span id="elipsis-' . $participante->id . '" class="elipsis">...</span><span id="parrafo-' . $participante->id . '" class="parrafo hidden">' . $parrafo2 . '</span>' . '</p>'
											. '<span><strong>Por: </strong>' . $participante->nombre
											. '<a data-id="' . $participante->id . '" class="pull-right ver-mas" href="#"><img class="pull-right" src="' . url() . '/img/ver-mas.png" alt=""></a>'
											. '</span></div>';
									$contenido[] = $html;
								endforeach;
								$html = '';
								for ($i = 0; $i < count($contenido); $i+=3):

									$html.=$contenido[$i];
								endfor;
								?>
								<div id="columna" class="col-xs-12">
									{{$html}}
								</div>
								<?php
								$html = '';
								for ($i = 1; $i < count($contenido); $i+=3):
									$html.=$contenido[$i];
								endfor;
								?>
								<div class="col-xs-12">
									{{$html}}
								</div>
								<?php
								$html = '';
								for ($i = 2; $i < count($contenido); $i+=3):
									$html.=$contenido[$i];
								endfor;
								?>
								<div class="col-xs-12">
									{{$html}}
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>


		<div id="galeriamenu">
			<div class="row">
				<div class="col-xs-6 menu-mobile">
					<a href="{{url()}}/" data-image="{{url()}}/img/home-menu-2.jpg" ><img src="{{url()}}/img/home-menu-1.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="col-xs-6 menu-mobile">
					<a data-image="{{url()}}/img/participa-menu-2.jpg" href="{{url()}}/participa"><img src="{{url()}}/img/participa-menu-1.jpg" alt="" class="img-responsive"></a>
				</div>
				<div class="col-xs-6 menu-mobile">
					<a data-image="{{url()}}/img/reto-menu-2.jpg" href="{{url()}}/reto"><img src="{{url()}}/img/reto-menu-1.jpg" alt="" class="img-responsive"></a>	
				</div>
				<div class="col-xs-6 menu-mobile">
					<a data-image="{{url()}}/img/galeria-menu-2.jpg" href="#"><img src="{{url()}}/img/galeria-menu-1.jpg" alt="" class="img-responsive"></a>
				</div>
			</div>
		</div>
		<footer class="galeria">
			<div class="container-fluid">
				<div class="row">
					<div class="visible-xs">
						<ul class="clearfix">
							<li><a href="https://www.facebook.com/EntelPeru" target="_blank" ><img src="img/facebook-mobile.png" alt="" /></a></li>
							<li><a href="https://twitter.com/EntelPeru" target="_blank" ><img src="img/twitter-mobile.png" alt="" /></a></li>
							<li><a href="https://instagram.com/entel_peru/" target="_blank" ><img src="img/instagram-mobile.png" alt="" /></a></li>
							<li><a href="https://www.youtube.com/user/PeruEntel" target="_blank" ><img src="img/youtube-mobile.png" alt="" /></a></li>
						</ul>
						<a href="{{url()}}/uploads/Bases-Concurso-Dia-de-la-madre.pdf" target="_blank" ><img src="img/btn-terminos-mobile.png" alt="" class="center-block"/></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>