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
			mail: {
				required: true,
				email: true
			},
			celular: "required",
			mensaje: "required"
		},
		submitHandler: function(form) {
			$.ajax({
				url: urlBase + '/registro',
				data: new FormData($('#registro')),
				error: function () {
					console.log('error');
				},
				dataType: 'json',
				success: function (data) {
					if (data.success == 'error') {
						$("#error-layer").fadeIn("slow");
						setTimeout(function () {
							$("#error-layer").fadeOut("slow");
						}, 5000);
					} else {
						$("#gracias-layer").fadeIn("slow");
						setTimeout(function () {
							$("#gracias-layer").fadeOut("slow", function(){
								$(".registro-content").addClass("none");
								$(".content-deportes-3").fadeIn("slow");
							});
						}, 5000);
					}
				},
				type: 'POST'
			});
		}
	});
});