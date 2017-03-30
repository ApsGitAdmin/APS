<?php

global $theme_root, $parent_root, $theme_path;
$theme_root = base_path() . path_to_theme();
$parent_root = base_path() . drupal_get_path('theme', 'surreal');

/**
 * Remove unused css styles 
 */
function surreal_css_alter(&$css) {
    unset($css[drupal_get_path('module', 'aggregator') . '/aggregator.css']);
    //unset($css[drupal_get_path('module', 'block') . '/block.css']);
    unset($css[drupal_get_path('module', 'book') . '/book.css']);
    unset($css[drupal_get_path('module', 'comment') . '/comment.css']);
    unset($css[drupal_get_path('module', 'field') . '/theme/field.css']);
    unset($css[drupal_get_path('module', 'filter') . '/filter.css']);
    unset($css[drupal_get_path('module', 'forum') . '/forum.css']);
    unset($css[drupal_get_path('module', 'locale') . '/locale.css']);
    unset($css[drupal_get_path('module', 'node') . '/node.css']);
    unset($css[drupal_get_path('module', 'poll') . '/poll.css']);
    unset($css[drupal_get_path('module', 'search') . '/search.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.behavior.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.messages.css']);
    unset($css[drupal_get_path('module', 'user') . '/user.css']);
    unset($css['sites/all/modules/ctools/css/ctools.css']);
    unset($css['sites/all/modules/contactinfo/css/contactinfo.css']);
   
    unset($css['sites/all/modules/simplenews/simplenews.css']);
	unset($css['sites/all/modules/contextual/contextual.css']);
}

function surreal_menu_item_link($link) {
    if (empty($link['localized_options'])) {
        $link['localized_options'] = array();
    }
    $link_options = $link['localized_options'];
    $link_options['html'] = TRUE;
    if ($link['menu_name'] == "primary-links") {
        $link['title'] .= '<span class="description">' . $link['description'] . '</span>';
    }
    return l('<span>' . $link['title'] . '</span>', $link['href'], $link_options);
}
/**
 * Override or insert variables into the page template.
 */
function surreal_preprocess_page(&$vars) {   
    // Chcek if is first setup of surreal and install banners.
    if (variable_get('theme_surreal_first_install', TRUE)) {
        include_once('theme-settings.php');
        _surreal_install();
    }
    //to print the banners
    $banners        = surreal_show_banners();
    $vars['banner'] = $banners;
}
 
function surreal_form_alter(&$form, &$form_state, $form_id) {	
	
	if ($form_id == 'search_block_form') {
    	$form['search_block_form']['#prefix'] = '<div class="widget_search">';
		$form['search_block_form']['#suffix'] = '</div>';
        $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
        $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
        $form['search_block_form']['#size'] = 16; // define size of the textfield
        $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
        $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
        $form['actions']['submit']['#attributes']['alt'] = t('Search');
        // Add extra attributes to the text  
        $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = '".t("Search")."';}";
        $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == '".t("Search")."') {this.value = '';}";
        // Prevent user from searching the default text
        $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='".t("Search")."'){ alert('".t("Please enter a search")."'); return false; }";
        // Alternative (HTML5) placeholder attribute instead of using the javascript
        $form['search_block_form']['#attributes']['placeholder'] = t('Search');
        // Adds a wrapper div to the whole form
    }
} 
  

$mapStatus   = theme_get_setting('contact-map-status', 'surreal');
$mapContent  = theme_get_setting('contact-map', 'surreal');
$contact_map = $mapContent;

$mapCode = '   
   $("googlemap").each(function(){                        
    var embed ="<iframe width=\'100%\' height=\'300px\' frameborder=\'0\' scrolling=\'no\'  marginheight=\'0\' marginwidth=\'0\'  src=\'https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&output=embed&z='.theme_get_setting('contact-map-zoom', 'surreal').'\'></iframe>";
    $(this).html(embed);                            
   });   ';
   
   drupal_add_js($mapCode, array('type' => 'inline','scope' => 'footer'));
variable_set("RenderContactMap", $contact_map);
//Show render contact map
if ($mapStatus == "1") {
    variable_set("RenderContactMap", $contact_map);
} else {
    variable_del("RenderContactMap");
}
  
function fancy_title($title) {
	$clean = explode(" ", $title);
	return "<span>".@$clean[0]."</span> ". @$clean[1]." ".@$clean[2]." ".@$clean[3]." ".@$clean[4]." ".@$clean[5]." ".@$clean[6]." ".@$clean[7]." ".@$clean[8]." ". @$clean[9]." ". @$clean[10]." ".@$clean[11]." ".@$clean[12]." ".@$clean[13]; 
}

function fancy_title_blog($title) {
	$clean = explode(" ", $title);
	return "<span>".@$clean[0]."</span> <br>". @$clean[1]." ".@$clean[2]." ". @$clean[3]." ". @$clean[4]." ".@$clean[5]." ".@$clean[6]." ".@$clean[7]." ".@$clean[8]." ". @$clean[9]." ". @$clean[10]." ".@$clean[11]." ".@$clean[12]." ".@@$clean[13]; 
}

function onepage_title($title) {
	$clean = explode(" ", $title);
	if(count($clean) > 1){
		return "<span>".$clean[0]."</span> ". @$clean[1]." ".@$clean[2]; 
	}
	else{
		return $title; 	
	}
}

function onepage_title_revert($title) {
	$clean = explode(" ", $title);
	if(count($clean) > 1){
		return $clean[0] . "<span>".$clean[1]." ".@$clean[2]."</span> "; 
	}
	else{
		return $title; 	
	}
}


function surreal_show_banners() {	

    $banners        = surreal_get_banners(FALSE);
    $slideshowSpeed = check_plain(theme_get_setting('slideshowSpeed', 'surreal'));
    $slideshowEffect = check_plain(theme_get_setting('slideshowEffect', 'surreal'));
	$backgroundButtonText = check_plain(theme_get_setting('backgroundButtonText', 'surreal'));
	
	$output = "$(document).ready(function() {
        
    $.supersized({

		// Functionality
		slideshow               :   1,			// Slideshow on/off
		autoplay				:	1,			// Slideshow starts playing automatically
		start_slide             :   1,			// Start slide (0 is random)
		stop_loop				:	0,			// Pauses slideshow on last slide
		random					:	0,			// Randomize slide order (Ignores start slide)
		slide_interval          :   5000,		// Length between transitions
		transition				:	2, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	600,		// Speed of transition
		new_window				:	1,			// Image links open in new window/tab
		pause_hover             :   0,			// Pause slideshow on hover
		keyboard_nav            :   1,			// Keyboard navigation on/off
		performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
		image_protect			:	1,			// Disables image dragging and right click with Javascript

		// Size & Position						   
		min_width		        :   0,			// Min width allowed (in pixels)
		min_height		        :   0,			// Min height allowed (in pixels)
		vertical_center         :   1,			// Vertically center background
		horizontal_center       :   1,			// Horizontally center background
		fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
		fit_portrait         	:	1,			// Portrait images will not exceed browser height
		fit_landscape			:   0,			// Landscape images will not exceed browser width

		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		thumb_links				:	0,			// Individual thumb links for each slide
		thumbnail_navigation    :   0,			// Thumbnail navigation
		slides 					:	[			// Slideshow Images
			";

			for ($i = 0; $i < count($banners); $i++) {
				$output .= '{ 
					"image" : "' . file_create_url($banners[$i]['image_path']) . '",
					"title" : "' . "<h2>" . fancy_title(t('@image_title', array('@image_title' => t($banners[$i]['image_title'])))) . "</h2>" . '",
				},';
    }
	
	 $output .= "
		],
									
		// Theme Options			   
		progress_bar			:	0,			// Timer for each slide							
		mouse_scrub				:	0

	});
	});";
	
		variable_set("SlideShowScript", $output);

	}
	
/**
 * Get banner settings.
 *
 * @param <bool> $all
 *    Return all banners or only active.
 *
 * @return <array>
 *    Settings information
 */
function surreal_get_banners($all = TRUE) {
    // Get all banners
    $banners = variable_get('theme_surreal_banner_settings', array());
    // Create list of banner to return
    $banners_value = array();
    foreach ($banners as $banner) {
        if ($all || $banner['image_published']) {
            // Add weight param to use `drupal_sort_weight`
            $banner['weight'] = $banner['image_weight'];
            $banners_value[] = $banner;
        }
    }
    // Sort image by weight
    usort($banners_value, 'drupal_sort_weight');
    return $banners_value;
}
/**
 * Set banner settings.
 *
 * @param <array> $value
 *    Settings to save
 */
function surreal_set_banners($value) {
    variable_set('theme_surreal_banner_settings', $value);
}
/**
 * phptemplate_preprocess
 *
 */
//function phptemplate_preprocess_node(&$vars)
//{
//    $vars['template_files'][] = 'node-' . $vars['nid'];
//    return $vars;
//}


/**
 * Theme Colors
 *
 */
//drupal_add_css(drupal_get_path('theme','surreal').'/css/'.theme_get_setting('colors', 'surreal'));
/**
 * Theme Homepage style
 *
 */
//drupal_add_css(drupal_get_path('theme','surreal').'/css/'.theme_get_setting('homepage', 'surreal'));

/**
 * Theme RTL Mode
 *
 */


function surreal_process_html(&$vars) {
  $vars['styles'] = preg_replace('/\.css\?.*"/','.css"', $vars['styles']);
}


/**
 * META tags and CSS files in to the header section.
 */
function surreal_preprocess_html(&$vars) {
   	global $parent_root;
   	drupal_add_js('http://jwpsrv.com/library/1gzkaihgEeSZeCIACyaB8g.js', 'external');
	drupal_add_js(drupal_get_path('theme', 'surreal') . '/js/custom.js', array('weight' => -1, 'group' => JS_THEME, 'type' => 'file'));	
    drupal_add_css(drupal_get_path('theme', 'surreal') . '/css/layout-white.css', array('group' => CSS_THEME, 'type' => 'file'));
}



global $user;

if ( $user->uid ) {
	$admin_css = "<style> 
	.mb_YTVPBar {bottom: 41px !important;} 
	#controlBar_bgndVideo, .buttonBar { padding-right:0px !important; padding-left:0px !important;}
	.mb_YTVPBar .buttonBar {top: -30px;}
	</style>";
	
	variable_set('inspiro_admin_css',$admin_css);
	
} else {
	$admin_css = "<style> 
	.mb_YTVPBar {bottom: 70px !important;} 
	#controlBar_bgndVideo, .buttonBar { padding-right:0px !important; padding-left:0px !important;}
	.mb_YTVPBar .buttonBar {top: -30px;}
	</style>";
	
	variable_set('inspiro_admin_css',$admin_css);
}



	