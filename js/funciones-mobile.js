$(document).ready(function () {
	$('#fullpage').fullpage({
		anchors: [],
		animateAnchor: false,
		menu: '#menu',
		scrollingSpeed: 1000,
		afterRender: function(){
			//playing the video
			$('video').get(0).play();
		},
		afterLoad: function(anchorLink, index){
			if (index !== 1) {
				$('video').get(0).pause();
			} else {
				$('video').get(0).play();
			}
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
