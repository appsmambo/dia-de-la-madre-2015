$(document).ready(function () {
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
			celular: "required"
		}
	});
});