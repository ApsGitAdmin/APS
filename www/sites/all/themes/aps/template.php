<?php

global $theme_root, $parent_root, $theme_path;
$theme_root = base_path() . path_to_theme();
$parent_root = base_path() . drupal_get_path('theme', 'aps');

/**
 * Remove unused css styles 
 */
function aps_css_alter(&$css) {
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

function aps_menu_item_link($link) {
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
 
function aps_form_alter(&$form, &$form_state, $form_id) {	
	
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

function aps_preprocess_page(&$variables) {
    global $base_url;
    $variables['aps_client_logo'] = image_style_url('client_logo', str_replace($base_url . '/sites/default/files/', 'public://', $variables['logo']));
} 
  
function aps_process_html(&$vars) {
    $vars['styles'] = preg_replace('/\.css\?.*"/','.css"', $vars['styles']);
}


/**
 * META tags and CSS files in to the header section.
 */
function aps_preprocess_html(&$vars) {
   	global $parent_root;
   	drupal_add_js('http://jwpsrv.com/library/1gzkaihgEeSZeCIACyaB8g.js', 'external');
	drupal_add_js(drupal_get_path('theme', 'aps') . '/js/custom.js', array('weight' => -1, 'group' => JS_THEME, 'type' => 'file'));	
    drupal_add_css(drupal_get_path('theme', 'aps') . '/css/layout-white.css', array('group' => CSS_THEME, 'type' => 'file'));
}

global $user;

if ( $user->uid ) {
	$admin_css = "<style> 
	.mb_YTVPBar {bottom: 41px !important;} 
	#controlBar_bgndVideo, .buttonBar { padding-right:0px !important; padding-left:0px !important;}
	.mb_YTVPBar .buttonBar {top: -30px;}
	nav {z-index:1 !important;}
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



	