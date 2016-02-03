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


//MENU --------------------------------------------------------------------------------/
	$(".menu a").click(function () {
        $("html, body").animate({
            scrollTop: ($($(this).attr("href")).offset().top - 150) + "px"
        }, {
            duration: Math.abs(($(document).scrollTop() - $($(this).attr("href")).offset().top) / 2),
            easing: "swing"
        });
        return false;
    });

//PARALLAX ----------------------------------------------------------------------------/
	$(window).bind('load', function () {
		parallaxInit();						  
	});

	function parallaxInit() {
		if (isMobile == true) return false;
		$('.parallax').parallax();
		/*add as necessary*/
	}


// Client Portfolio -------------------------------------------------------------------/
	$(".client-portfolio-block").hover(function() {
		client_block = $(this);
		client_overlay = $(this).find(".client-portfolio-overlay");
		height_diff = client_block.height() - client_overlay.height();
		client_overlay.stop(true, false).animate({ 'top': height_diff + "px" }, "normal", "swing", function() {
			client_overlay.addClass("block-open");
		});
	}, function() {
		client_block = $(this);
		client_overlay = $(this).find(".client-portfolio-overlay");
		if (client_overlay.hasClass("block-open")) {
			client_overlay.stop(true, false).delay(500).animate({ 'top': client_block.height() + "px" }, "normal", "swing", function() {
				client_overlay.removeClass("block-open");
			});
		} else {
			client_overlay.stop(true, false).animate({ 'top': client_block.height() + "px" }, "normal", "swing", function() {
				client_overlay.removeClass("block-open");
			});
		}
    });

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
});
})(jQuery);