function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#previo').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
$(document).ready(function () {
	$('#archivo').click(function() {
		$("#foto").trigger('click');
	});
	$("#foto").change(function(){
		readURL(this);
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
		},
		submitHandler: function(form) {
			$.ajax({
				url: urlBase + '/registro',
				data: new FormData(this),
				error: function () {
					console.log('error');
				},
				dataType: 'json',
				success: function (data) {
					console.log('111');
					return;
					if (data.success == 'error') {
						//
					} else {
						$('.formulario').fadeTo('fast', 0, function() {
							$('.gracias').animate({
								right: "0"
							}, 500, function() {
								// Animation complete.
							});
						});
					}
				},
				type: 'POST'
			});
			return false;
		}
	});
});