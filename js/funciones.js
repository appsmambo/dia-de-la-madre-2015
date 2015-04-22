function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#previo').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
function desbloquear() {
	$('div.formulario').unblock()
}
$(document).ready(function () {
	$('header, footer, .hashtag, .saltar').fadeTo('fast', 0);
	$(".page-intro, .intro.saltar")
		.mouseenter(function() {
			$('header, footer, .hashtag, .saltar').fadeTo('fast', 1);
		})
		.mouseleave(function() {
			if (flagIntro) return;
			$('header, footer, .hashtag, .saltar').fadeTo('fast', 0);
		});
	$('#archivo').click(function() {
		$('#foto').trigger('click');
	});
	$('#foto').change(function(){
		readURL(this);
	});
	$('body').on('click', '.ver-mas', function() {
		var id;
		id = $(this).data('id');
		$('#elipsis-'+id).fadeOut();
		$('#parrafo-'+id).removeClass('hidden');
		$(this).fadeOut();
	});
	$('input:checkbox').screwDefaultButtons({
		image: 'url("img/checkbox.jpg")',
		width: 35,
		height: 31
	});
	$('#dni').keyup(function () {
		this.value = this.value.replace(/[^0-9\.]/g, '');
	});
	$("#registro").validate({
		rules: {
			nombre: "required",
			dni: "required",
			email: {
				required: true,
				email: true
			},
			celular: "required",
			mensaje: "required"
		}
	});
	$("#registro").submit( function(e) {
		if ($("#registro").valid()) {
			$.ajax({
				url: urlBase + '/registro',
				type: 'POST',
				data: new FormData(this),
				processData: false,
				contentType: false,
				error: function () {
					console.log('error');
				},
				dataType: 'json',
				success: function (data) {
					if (data.success == 'error') {
						$('div.formulario').block({
							message: '<h1>Hubo un error al registrar sus datos, vuelva a intentarlo.</h1>',
							css: {
								border: 'none',
								padding: '15px',
								backgroundColor: '#000',
								'-webkit-border-radius': '10px',
								'-moz-border-radius': '10px',
								opacity: .85,
								color: '#fff'
							}
						});
						ga('send', 'event', 'sube tu foto', 'error');
						setTimeout('desbloquear()', 5000);
						return false;
					} else {
						$('#flujo').val('Registro');
						$('#nombre, #dni, #email, #celular, #mensaje').val('');
						$("#newsletter").screwDefaultButtons("uncheck");
						$('.total').html(data.total);
						$('#columna').prepend(data.html);
						$('.formulario').fadeTo('fast', 0, function() {
							$('.gracias').animate({
								right: "0"
							}, 500, function() {
								// Animation complete.
								ga('send', 'event', 'sube tu foto', 'exito');
							});
						});
					}
				}
			});
		}
		e.preventDefault();
	});
	$('.compartir').click(function() {
		ga('send', 'event', 'compartir', 'click');
		FB.ui({
			method: 'share',
			href: urlBase,
		}, function(response){});
	})
});