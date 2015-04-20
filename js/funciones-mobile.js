$(document).ready(function () {
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
		menu: '#menu',
		scrollingSpeed: 1000
	});
	$('.col-xs-6 img').click(function() {
		$('this').hide("fast", function(){
			$('.activo').show('fast');
		});
	});
});
