var PageTransitions = (function () {

	var $main = $('#pt-main'),
			$pages = $main.children('div.pt-page'),
			pagesCount = $pages.length,
			current = 0,
			scroll = 0,
			flag = true, // para detener los eventos de menu y boton en footer
			isAnimating = false,
			endCurrPage = false,
			endNextPage = false,
			animEndEventNames = {
				'WebkitAnimation': 'webkitAnimationEnd',
				'OAnimation': 'oAnimationEnd',
				'msAnimation': 'MSAnimationEnd',
				'animation': 'animationend'
			},
	// animation end event name
	animEndEventName = animEndEventNames[ Modernizr.prefixed('animation') ],
			// support css animations
			support = Modernizr.cssanimations;

	function menu() {
		api_fsvideo.videoBgPause();
		$('.goMenu').removeClass("active");
		/*if (current == 0) {
			$('#flujo').val( $('#flujo').val() + '|verVideo');
			//$('.go').fadeIn('fast');
			//$('#menu-home').addClass("active")
			
			$('header, footer, .hashtag').fadeTo('fast', 0);
			$('.logo-1').show("fast", function () {
				$('.logo-2').hide("fast");
				$('.navbar-nav').addClass("hidden");
				$('.facebook, .twitter, .youtube, .instagram, header, footer').removeClass("active");
				$('footer div, footer a').addClass("hidden");
				$('.go').hide("fast");
				api_fsvideo.videoBgRewind();
				api_fsvideo.videoBgPlay();
				nextPage(48, 0);
			});
		}*/
		if (current == 1) {
			$('#flujo').val( $('#flujo').val() + '|Home');
			$('.go').fadeIn('fast');
			$('#menu-home').addClass("active")
		}
		if (current == 2) {
			$('#flujo').val( $('#flujo').val() + '|Participa');
			$('.go').fadeIn('fast');
			$('#menu-participa').addClass("active")
		}
		if (current == 3) {
			$('#flujo').val( $('#flujo').val() + '|Reto');
			$('.go').fadeIn('fast');
			$('#menu-reto').addClass("active");
			setTimeout(function () {
				$(".reto-mobile-content").fadeOut("slow", function () {
					$(".kilos-content").fadeIn("slow");
				})
			}, 5000);
		}
		if (current == 4) {
			$('#flujo').val( $('#flujo').val() + '|Galeria');
			$('.go').fadeOut('fast');
			$('#menu-galeria').addClass("active")
		}
	}
	function init() {

		$pages.each(function () {
			var $page = $(this);
			$page.data('originalClassList', $page.attr('class'));
		});

		$pages.eq(current).addClass('pt-page-current');

		$('#subeTuFoto').click(function () {
			$('header, #pt-main, footer').delay(250).animate({
				right: "+820"
			}, 250, function () {
				// Animation complete.
			});
			$('.formulario').animate({
				right: "0"
			}, 500, function () {
				ga('send', 'event', 'navegar', 'click', 'Sube tu foto');
				// Animation complete.
			});
			flag = false;
		});
		$('.btn-close').click(function () {
			$('header, #pt-main, footer').delay(250).animate({
				right: "0"
			}, 250, function () {
				// Animation complete.
			});
			$('.formulario, .gracias').animate({
				right: "-820"
			}, 500, function () {
				// Animation complete.
			});
			flag = true;
		});

		$('body').mousewheel(function(event, intDelta){
			if (intDelta > 0){
				scroll++;
			} else if (intDelta < 0){
				scroll--;
			}
			if (scroll >= 12) {
				var tCurrent = current;
				scroll = 0;
				if (current < 2)
					return;
				tCurrent--;
			}
			if (scroll <= -12) {
				var tCurrent = current;
				scroll = 0;
				if (current == 0) {
					$('.saltar').trigger('click');
					return;
				}
				tCurrent++;
			}
			if (tCurrent == 1) {
				ga('send', 'event', 'navegar', 'click', 'Home');
				$('#menu-home').trigger('click');
			}
			if (tCurrent == 2) {
				ga('send', 'event', 'navegar', 'click', 'Participa');
				$('#menu-participa').trigger('click');
			}
			if (tCurrent == 3) {
				ga('send', 'event', 'navegar', 'click', 'Reto');
				$('#menu-reto').trigger('click');
			}
			if (tCurrent == 4) {
				ga('send', 'event', 'navegar', 'click', 'Galeria');
				$('#menu-galeria').trigger('click');
			}
		});
		$('.go').click(function () {
			nextPage(48);
			return false;
		});
		$('.saltar').click(function () {
			var timerFin = new Date(), tiempoVideo;
			tiempoVideo = Math.floor((timerFin.getTime() - timerInicio.getTime()) / 1000);
			$('#video').val(tiempoVideo);
			flagIntro = true;
			$('header, footer, .hashtag').fadeTo('fast', 1);
			api_fsvideo.videoBgPause();
			nextPage(48, 1);
			$('.logo-1').hide("fast", function () {
				$('.logo-2').show("fast");
				$('.navbar-nav').removeClass("hidden");
				$('.facebook, .twitter, .youtube, .instagram, header, footer').addClass("active");
				$('footer div, footer a').removeClass("hidden");
				$('.go').show("fast");
				setTimeout(function () {
					$(".mobile-parrafo").fadeOut("slow", function () {
						$(".parrafo-2-mobile").fadeIn("slow");
					})
				}, 5000);
			});
		});
		$('.goMenu').click(function () {
			seccion = $(this).data('seccion');
			if (current == seccion)
				return false;
			nextPage(48, seccion);
			return false;
		});

	}

	function nextPage(options, showPage) {
		if (!flag)
			return;
		if (typeof showPage === 'undefined') {
			showPage = 0;
		}

		var animation = (options.animation) ? options.animation : options;

		if (isAnimating) {
			return false;
		}

		isAnimating = true;

		var $currPage = $pages.eq(current);

		if (showPage) {
			current = showPage;
		}
		else {
			if (current < pagesCount - 1) {
				++current;
			}
			else {
				current = 1;
			}
		}

		var $nextPage = $pages.eq(current).addClass('pt-page-current'),
				outClass = '', inClass = '';

		switch (animation) {

			case 1:
				outClass = 'pt-page-moveToLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 2:
				outClass = 'pt-page-moveToRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 3:
				outClass = 'pt-page-moveToTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 4:
				outClass = 'pt-page-moveToBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 5:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 6:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 7:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 8:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 9:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 10:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 11:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 12:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 13:
				outClass = 'pt-page-moveToLeftEasing pt-page-ontop';
				inClass = 'pt-page-moveFromRight';
				break;
			case 14:
				outClass = 'pt-page-moveToRightEasing pt-page-ontop';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 15:
				outClass = 'pt-page-moveToTopEasing pt-page-ontop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 16:
				outClass = 'pt-page-moveToBottomEasing pt-page-ontop';
				inClass = 'pt-page-moveFromTop';
				break;
			case 17:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 18:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 19:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 20:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 21:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-scaleUpDown pt-page-delay300';
				break;
			case 22:
				outClass = 'pt-page-scaleDownUp';
				inClass = 'pt-page-scaleUp pt-page-delay300';
				break;
			case 23:
				outClass = 'pt-page-moveToLeft pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 24:
				outClass = 'pt-page-moveToRight pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 25:
				outClass = 'pt-page-moveToTop pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 26:
				outClass = 'pt-page-moveToBottom pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 27:
				outClass = 'pt-page-scaleDownCenter';
				inClass = 'pt-page-scaleUpCenter pt-page-delay400';
				break;
			case 28:
				outClass = 'pt-page-rotateRightSideFirst';
				inClass = 'pt-page-moveFromRight pt-page-delay200 pt-page-ontop';
				break;
			case 29:
				outClass = 'pt-page-rotateLeftSideFirst';
				inClass = 'pt-page-moveFromLeft pt-page-delay200 pt-page-ontop';
				break;
			case 30:
				outClass = 'pt-page-rotateTopSideFirst';
				inClass = 'pt-page-moveFromTop pt-page-delay200 pt-page-ontop';
				break;
			case 31:
				outClass = 'pt-page-rotateBottomSideFirst';
				inClass = 'pt-page-moveFromBottom pt-page-delay200 pt-page-ontop';
				break;
			case 32:
				outClass = 'pt-page-flipOutRight';
				inClass = 'pt-page-flipInLeft pt-page-delay500';
				break;
			case 33:
				outClass = 'pt-page-flipOutLeft';
				inClass = 'pt-page-flipInRight pt-page-delay500';
				break;
			case 34:
				outClass = 'pt-page-flipOutTop';
				inClass = 'pt-page-flipInBottom pt-page-delay500';
				break;
			case 35:
				outClass = 'pt-page-flipOutBottom';
				inClass = 'pt-page-flipInTop pt-page-delay500';
				break;
			case 36:
				outClass = 'pt-page-rotateFall pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 37:
				outClass = 'pt-page-rotateOutNewspaper';
				inClass = 'pt-page-rotateInNewspaper pt-page-delay500';
				break;
			case 38:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 39:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 40:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 41:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 42:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-rotatePullRight pt-page-delay180';
				break;
			case 43:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-rotatePullLeft pt-page-delay180';
				break;
			case 44:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-rotatePullBottom pt-page-delay180';
				break;
			case 45:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-rotatePullTop pt-page-delay180';
				break;
			case 46:
				outClass = 'pt-page-rotateFoldLeft';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 47:
				outClass = 'pt-page-rotateFoldRight';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 48:
				outClass = 'pt-page-rotateFoldTop';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 49:
				outClass = 'pt-page-rotateFoldBottom';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 50:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-rotateUnfoldLeft';
				break;
			case 51:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-rotateUnfoldRight';
				break;
			case 52:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-rotateUnfoldTop';
				break;
			case 53:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-rotateUnfoldBottom';
				break;
			case 54:
				outClass = 'pt-page-rotateRoomLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomLeftIn';
				break;
			case 55:
				outClass = 'pt-page-rotateRoomRightOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomRightIn';
				break;
			case 56:
				outClass = 'pt-page-rotateRoomTopOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomTopIn';
				break;
			case 57:
				outClass = 'pt-page-rotateRoomBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomBottomIn';
				break;
			case 58:
				outClass = 'pt-page-rotateCubeLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeLeftIn';
				break;
			case 59:
				outClass = 'pt-page-rotateCubeRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeRightIn';
				break;
			case 60:
				outClass = 'pt-page-rotateCubeTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeTopIn';
				break;
			case 61:
				outClass = 'pt-page-rotateCubeBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeBottomIn';
				break;
			case 62:
				outClass = 'pt-page-rotateCarouselLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselLeftIn';
				break;
			case 63:
				outClass = 'pt-page-rotateCarouselRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselRightIn';
				break;
			case 64:
				outClass = 'pt-page-rotateCarouselTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselTopIn';
				break;
			case 65:
				outClass = 'pt-page-rotateCarouselBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselBottomIn';
				break;
			case 66:
				outClass = 'pt-page-rotateSidesOut';
				inClass = 'pt-page-rotateSidesIn pt-page-delay200';
				break;
			case 67:
				outClass = 'pt-page-rotateSlideOut';
				inClass = 'pt-page-rotateSlideIn';
				break;

		}
		
		menu();

		$currPage.addClass(outClass).on(animEndEventName, function () {
			$currPage.off(animEndEventName);
			endCurrPage = true;
			if (endNextPage) {
				onEndAnimation($currPage, $nextPage);
			}
		});

		$nextPage.addClass(inClass).on(animEndEventName, function () {
			$nextPage.off(animEndEventName);
			endNextPage = true;
			if (endCurrPage) {
				onEndAnimation($currPage, $nextPage);
			}
		});

		if (!support) {
			onEndAnimation($currPage, $nextPage);
		}

	}

	function onEndAnimation($outpage, $inpage) {
		endCurrPage = false;
		endNextPage = false;
		resetPage($outpage, $inpage);
		isAnimating = false;
	}

	function resetPage($outpage, $inpage) {
		$outpage.attr('class', $outpage.data('originalClassList'));
		$inpage.attr('class', $inpage.data('originalClassList') + ' pt-page-current');
	}

	init();

	return {
		init: init,
		nextPage: nextPage,
	};

})();