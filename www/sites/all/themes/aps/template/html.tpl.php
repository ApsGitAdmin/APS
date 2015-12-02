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
  $(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false,
	    controlNav: false,
	    directionNav: false,
		slideshowSpeed: 5000, 
		pauseOnAction: false,
		itemWidth: 360,
		minItems: 1,
	});
  });
</script> 
<script type="text/javascript" charset="utf-8">
	$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
	

	var divs = $("form.contact-form > div > div");
	divs.slice(0, 3).wrapAll("<div class='five columns alpha'></div>");
	divs.slice(3, 6).wrapAll("<div class='four columns omega'></div>");
	 
</script> 
<?php print variable_get("inspiro_admin_css"); ?>
</body>
</html>