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

	if (isset($variables['node'])) {
	    // Ref suggestions cuz it's stupid long.
	    $suggests = &$variables['theme_hook_suggestions'];

	    // Get path arguments.
	    $args = arg();
	    // Remove first argument of "node".
	    unset($args[0]);

	    // Set type.
	    $type = "page__type_{$variables['node']->type}";

	    // Bring it all together.
	    $suggests = array_merge(
	      	$suggests,
	      	array($type),
	      	theme_get_suggestions($args, $type)
	    );
  	}

  	// Adding in Delta class to body
	if (module_exists('delta')){
		$deltaname = delta_get_current($GLOBALS['theme']);
		$deltaname = str_replace('_', '-', $deltaname);
		preg_match_all('!\d+!', $deltaname, $numbers);
		foreach ($numbers[0] as $key => $num) {
			$deltaname = str_replace($num, convert_number_to_words($num), $deltaname);
		}
	  	$variables['attributes_array']['class'][] = 'delta-' . ($deltaname)?  : 'delta-none';
	}

	// Adds the Branding class to body
	if ($menu_object = menu_get_object()) {
    	if (node_is_page($menu_object) && $menu_object->type == 'menu_page') {
      	$node_wrapper = entity_metadata_wrapper('node', $menu_object);
      		if ($branding = $node_wrapper->field_branding->value()) {
		        $brandingname = preg_replace('/[^\da-z]/i', '-', drupal_strtolower($branding->title));
		        preg_match_all('!\d+!', $brandingname, $numbers);
		        foreach ($numbers[0] as $key => $num) {
		          $brandingname = str_replace($num, convert_number_to_words($num), $brandingname);
		        }
	        	$variables['attributes_array']['class'][] = 'branding-' . $brandingname;
      		}
    	}
  	}

	// Adds the Delta responsive stylesheets
	$theme = alpha_get_theme();
	if (array_key_exists('deltas-default.css', $theme->settings['css'])) {
		$layouts = $theme->grids['alpha_default']['layouts'];
		$keys = array_keys($layouts);
		for ($i = 0; $i < 3; $i++) { 
			drupal_add_css(drupal_get_path('theme', 'aps_player') . '/css/deltas-default-' . $keys[$i] . '.css', array('group' => CSS_THEME, 'weight' => (120 - $i), 'media' => $layouts[$keys[$i]]['media']));
		}
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

function convert_number_to_words($number) {
  $hyphen      = '-';
  $conjunction = '-and-';
  $separator   = ', ';
  $negative    = 'negative-';
  $decimal     = '-point-';
  $dictionary  = array(
    0 => 'zero',
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen',
    16 => 'sixteen',
    17 => 'seventeen',
    18 => 'eighteen',
    19 => 'nineteen',
    20 => 'twenty',
    30 => 'thirty',
    40 => 'fourty',
    50 => 'fifty',
    60 => 'sixty',
    70 => 'seventy',
    80 => 'eighty',
    90 => 'ninety',
    100 => 'hundred'
  );

    if (!is_numeric($number)) {
      return FALSE;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
      // overflow
      trigger_error(
        'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
      );
      return FALSE;
    }

    if ($number < 0) {
      return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = NULL;

    if (strpos($number, '.') !== FALSE) {
      list($number, $fraction) = explode('.', $number);
    }

    switch (TRUE) {
      case $number < 21:
        $string = $dictionary[$number];
        break;
      case $number < 100:
        $tens   = ((int) ($number / 10)) * 10;
        $units  = $number % 10;
        $string = $dictionary[$tens];
        if ($units) {
          $string .= $hyphen . $dictionary[$units];
        }
        break;
      case $number < 1000:
        $hundreds  = $number / 100;
        $remainder = $number % 100;
        $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
        if ($remainder) {
          $string .= $conjunction . convert_number_to_words($remainder);
        }
        break;
      default:
        $baseUnit = pow(1000, floor(log($number, 1000)));
        $numBaseUnits = (int) ($number / $baseUnit);
        $remainder = $number % $baseUnit;
        $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
        if ($remainder) {
          $string .= $remainder < 100 ? $conjunction : $separator;
          $string .= convert_number_to_words($remainder);
        }
        break;
    }

    if (NULL !== $fraction && is_numeric($fraction)) {
      $string .= $decimal;
      $words = array();
      foreach (str_split((string) $fraction) as $number) {
        $words[] = $dictionary[$number];
      }
      $string .= implode(' ', $words);
    }

  return $string;
}