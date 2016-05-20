<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function aps_player_preprocess_html(&$variables) {
  	drupal_add_js(drupal_get_path('theme', 'aps_player') . '/js/admin-bar.js', array( 
    	'scope' => 'footer', 
    	'weight' => '15', 
  	));

  	// Adding in Delta class to body
	if (module_exists('delta')){
		$deltaname = delta_get_current($GLOBALS['theme']);
	  	$variables['attributes_array']['class'][] = ($deltaname)? str_replace('_', '-', $deltaname) : 'delta-none';
	} 
}

/**
 * Override or insert variables into the view templates.
 */
function aps_player_preprocess_views_view(&$variables) {
	// Code for switching template info for different views, add new declarations below
	switch ($variables['view']->name) {
		case 'media_on_demand_slides':
			$variables['total'] = count($variables['view']->result);
			break;
		
		default:
			# code...
			break;
	}
}

/**
 * Override or insert variables into the view templates.
 */
function aps_player_preprocess_views_view_fields(&$variables) {
	switch ($variables['view']->name) {
		case 'menu_page_content':
			$fields = &$variables['fields'];
			// Setup the URL variable based on the content type
			if ($fields['type']->content == 'vimeo') {
				$fields['url'] = $fields['field_vimeo']->content;
			} else {
				$fields['url'] = $fields['path']->content;
			}
			break;
		
		default:
			# code...
			break;
	}
}