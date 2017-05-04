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

function aps_digitalsignage_preprocess_page(&$vars, $hook) {
  	if (isset($vars['node'])) {
    	$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  	}
}

function aps_digitalsignage_preprocess_node(&$vars) {
  	if($vars['view_mode'] == 'teaser') {
    	$vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';
    	$vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  	}
}

function aps_digitalsignage_preprocess_html(&$vars) {
	if ($vars['page']) {
		if ($vars['page']['#views_contextual_links_info']) {
			if ($vars['page']['#views_contextual_links_info']['views_ui']) {
				if ($vars['page']['#views_contextual_links_info']['views_ui']['view_name'] == 'cluster_display' && $vars['page']['#views_contextual_links_info']['views_ui']['view_display_id'] == 'room_list') {
					$http_equiv = array(
					    '#type' => 'html_tag',
					    '#tag' => 'meta',
					    '#attributes' => array(
						    'http-equiv' => 'Refresh',
						    'content' => '300',
						)
					);
					drupal_add_html_head($http_equiv, 'http_equiv');
				}
			}
		}
	}
}
