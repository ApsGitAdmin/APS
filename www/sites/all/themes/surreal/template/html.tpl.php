<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<title><?php print $head_title_array['name']; ?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <?php global $parent_root; ?>
    <link rel="shortcut icon" href="<?php print $parent_root; ?>/images/favicon.ico?v=2">
    <link rel="apple-touch-icon" href="<?php print $parent_root; ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php print $parent_root; ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php print $parent_root; ?>/images/apple-touch-icon-114x114.png">

<!-- CSS Styles -->
<?php print $styles; ?>

<!-- JavaScripts -->
<?php print $scripts; ?>
<script type="text/javascript">
	var isMobile = false;
	if( navigator.userAgent.match(/Android/i) || 
	navigator.userAgent.match(/webOS/i) ||
	navigator.userAgent.match(/iPhone/i) || 
	navigator.userAgent.match(/iPad/i)|| 
	navigator.userAgent.match(/iPod/i) || 
	navigator.userAgent.match(/BlackBerry/i)){				
		isMobile = true;			
	}
			
	/*iOS5 fixed-menu fix*/
	var iOS5 = false;
	if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
		iOS5 = true;		
	}
		
	
</script>
<script>
	$(document).ready(function(){
		$("nav").sticky({topSpacing:0});
	});
</script>
</head>

<body ontouchstart="">

<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?> 
<script type="text/javascript">
	function moveTo(contentArea){
		var goPosition = $(contentArea).offset().top;
		$('html,body').animate({ scrollTop: goPosition}, 'slow');
	}
</script> 
<script type="text/javascript">
	  $('#carouselSlider').flexslider({
		animation: "slide",
		animationLoop: true,
		itemWidth: 237,
		itemMargin: 2,
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
</script> 
<script type="text/javascript">
  $(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		direction: "vertical",
		reverse: true,
		directionNav: true,
		controlsContainer: ".hero-controls-container", 
	    prevText: "",
	    nextText: "",   
		slideshowSpeed: 3000, 
		animationSpeed: 800,  
	  start: function(slider){
		$('body').removeClass('loading');
	  }
	});

	//SLIDESHOW ---------------------------------------------------------------------------/
	$(".flexslider a").click(function () {
        $("html, body").animate({
            scrollTop: ($($(this).attr("href")).offset().top - 100)+ "px"
        }, {
            duration: Math.abs(($(document).scrollTop() - $($(this).attr("href")).offset().top) / 2),
            easing: "swing"
        });
        return false;
    });
  });
</script> 
<script type="text/javascript" charset="utf-8">
	
	$(document).ready(function(){
		$("ul.slides > li > img").removeAttr('width');
		$("ul.slides > li > img").removeAttr('height');

			
		jQuery(".gmap-toggle").click(function () {
			var c = jQuery(this),
				b = jQuery(".googlemap-wrap"),
				a = jQuery(".peThemeContactForm");
			if (c.hasClass("toggled")) {
				c.toggleClass("toggled");
				b.css("height", "0px").css("visibility", "hidden").css("opacity", "0");
				a.fadeIn()
			} else {
				c.toggleClass("toggled");
				b.css("height", "300px").css("visibility", "visible").css("opacity", "1");
				a.fadeOut()
			}
			return false
		});
		
		$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
	

	var divs = $("form.contact-form > div > div");
	divs.slice(0, 3).wrapAll("<div class='five columns alpha'></div>");
	divs.slice(3, 6).wrapAll("<div class='four columns omega'></div>");

	});
	
	

	
		<?php if (drupal_is_front_page()):?>		
		//Main menu configure
		  $('#nav li').each(function(){
			var search = '<?php print base_path();?>';
			var $a = $(this).find('a');
			var href = $a.attr('href');
			if(href.indexOf(search) === 0){
			  href = href.substr(search.length);
			  $a.attr('href', href);
			}
		  });
	  <?php endif;?>
	  
</script> 
<?php print variable_get("inspiro_admin_css"); ?>
</body>
</html>