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
		<!--div class="pt-triggers">
			<button id="arriba" class="pt-touch-button">ARRIBA</button>
			<button id="abajo" class="pt-touch-button">ABAJO</button>
		</div-->
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
			<div class="pt-page page-inicio">
				
			</div>
			<div class="pt-page page-participa">
				
			</div>
			<div class="pt-page page-elReto">
				
			</div>
			<div class="pt-page page-galeria">
				
			</div>
		</div>
		<script src="{{url()}}/js/pagetransitions.js"></script>
	</body>
</html>