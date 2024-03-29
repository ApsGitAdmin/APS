/*-------------------------------------------------------------------------

	Theme Name: Surreal Studio
	
-------------------------------------------------------------------------*/
(function($) {
$(document).ready(function () {
	/*vars used throughout*/
	var wh,
		scrollSpeed = 1000,
		parallaxSpeedFactor = 0.6,
		scrollEase = 'easeOutExpo',
		targetSection,
		sectionLink = 'a.navigateTo',
	 	section = $('.section');


//INIT --------------------------------------------------------------------------------/
	if (isMobile == true) {
		$('.header').addClass('mobileHeader');	//add mobile header class
	} else {
		$('.page').addClass('desktop');
		$('.parallax').addClass('fixed-desktop');
	}

//POPUP -------------------------------------------------------------------------------/
    if ($('#alert-popup').length != 0) {
        $.magnificPopup.open({
            items: [
                {
                    src: '#alert-popup',
                    type: 'inline'
                }
            ],
            modal: true,
            callbacks: {
                close: function () {
                    $("html, body").animate({
                        scrollTop: $("#services").offset().top + "px"
                    }, {
                        duration: Math.abs(($(document).scrollTop() - $("#services").offset().top) / 2),
                        easing: "swing"
                    });
                }
            }
        }, 0);
    }

//MENU --------------------------------------------------------------------------------/
	$("nav ul.menu li a").click(function () {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: Math.abs(($(document).scrollTop() - $($(this).attr("href")).offset().top) / 2),
            easing: "swing"
        });
        return false;
    });


//LAZY LOADING -------------------------------------------------------------------------/
  	//$(function () {
//		if (lazyload == false || isMobile == true) return false;
//        $("img.lazy").lazyload({
//            placeholder : "images/blank.gif",
//            effect : "fadeIn"
//        });
//    });


//PARALLAX ----------------------------------------------------------------------------/
	$(window).bind('load', function () {
		parallaxInit();						  
	});

	function parallaxInit() {
		if (isMobile == true) return false;
		$('#parallax-1').parallax();
		$('#parallax-2').parallax();
		$('#parallax-3').parallax();
		$('#parallax-4').parallax();
		$('#parallax-5').parallax();
		$('#parallax-6').parallax();
		/*add as necessary*/
	}


//HOMEPAGE SPECIFIC -----------------------------------------------------------------/
	function sliderHeight() {
		wh = $(window).height();
		//$('#homepage').css({height: wh});
	}
	function peopleWidth() {
		ww = $(window).width();
		if (ww > 767) {
			$('.teamBlock .teamImage.showName').removeClass('showName');
			$('.teamBlock .teamImage.showMail').removeClass('showMail');
		}
	}
	sliderHeight();
	peopleWidth();


//	Accordion  ------------------------------------------------------------------------/

	(function () {

		var $container = $('.accContainer'),
			$trigger   = $('.accTrigger');
			fullWidth = $container.outerWidth(true);

		$container.hide();
		$trigger.first().addClass('active').next().show();

		$trigger.css('width', fullWidth - 2);
		$container.css('width', fullWidth - 2);

		$trigger.on('click', function (e) {
			if ($(this).next().is(':hidden') ) {
			$trigger.removeClass('active').next().slideUp(300);
			$(this).toggleClass('active').next().slideDown(300);
			}
			e.preventDefault();
		});

		// Resize
		$(window).on('resize', function () {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width());
			$container.css('width', $container.parent().width());
		});

	})();


//WINDOW EVENTS ---------------------------------------------------------------------/	
	 
	$(window).bind('resize',function () {

		//Update slider height
		sliderHeight();

		// Update People Width
		peopleWidth();
	});

	$('.teamBlock .teamImage').click(function(){
		if ($(window).width() < 767) {
			if ($(this).hasClass('showMail')) {
				$('.teamBlock .teamImage.showMail').removeClass('showMail');
			}
			else if ($(this).hasClass('showName')) {
				$('.teamBlock .teamImage.showName').removeClass('showName');
				$(this).addClass('showMail');
			} 
			else {
				$('.teamBlock .teamImage.showName').removeClass('showName');
				$('.teamBlock .teamImage.showMail').removeClass('showMail');
		    	$(this).addClass('showName');
		    }
		}
	});

//Shadowbox ---------------------------------------------------------------------/	

	$('.magnific-popup').magnificPopup({
		mainClass: 'mfp-fade',
		removalDelay: 500,
		type: 'iframe',
		patterns: {
		    youtube: {
		      index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

		      id: 'v=', // String that splits URL in a two parts, second part should be %id%
		      // Or null - full URL will be returned
		      // Or a function that should return %id%, for example:
		      // id: function(url) { return 'parsed id'; }

		      src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
		    },
		    vimeo: {
		      index: 'vimeo.com/',
		      id: '/',
		      src: '//player.vimeo.com/video/%id%?autoplay=1'
		    },
		    gmaps: {
		      index: '//maps.google.',
		      src: '%id%&output=embed'
		    }
  		},
	});
	$('.magnific-inline').magnificPopup({
	  	type:'inline',
	});
});


//Vimeo Poster Frame ---------------------------------------------------------------------/	

jQuery(function($) {

	var iframe = $('.aps-video')[0],
	player = $f(iframe);

	player.addEvent('ready', function() {
		player.addEvent('play', onPlay);
		player.addEvent('pause', onPause);
		player.addEvent('finish', onFinish);
	});
  
  $('.posterFrame').click(function(){
    $(this).fadeOut(400);
    player.api('play');

  });

});











})(jQuery);