<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php if (!aps_simpleweather_file_required()): ?>
	<?php 
		drupal_add_js(drupal_get_path('module', 'aps_simpleweather') . '/js/aps_simpleweather.js');
		drupal_add_js(array('aps_simpleweather' => array('woeid' => $fields['field_woeid']->content)), 'setting'); 
		
		$items = explode(',', $fields['field_weather_setup']->content);

		global $base_path;
		$theme_path = drupal_get_path('theme', 'aps_digitalsignage');
		drupal_add_js(array('aps_simpleweather' => array('theme_path' => $base_path . $theme_path)), 'setting');
		foreach ($items as $item){
			drupal_add_js(array('aps_simpleweather' => array(preg_replace("/[^A-Za-z0-9 ]/", '', $item) => $item)), 'setting');
		}
	?>
	<?php print theme('aps_simpleweather_output'); ?>
<?php endif; ?>
