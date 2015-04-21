$(document).ready(function () {
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
		menu: '#menu',
		scrollingSpeed: 1000,
		afterRender: function(){
			//playing the video
			$('video').get(0).play();
		}
	});
	$('.col-xs-6 img').click(function() {
		$('this').hide("fast", function(){
			$('.activo').show('fast');
		});
	});
	$('input:checkbox').screwDefaultButtons({
		image: 'url("img/checkbox.jpg")',
		width: 35,
		height: 31
	});
});
