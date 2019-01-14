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
<?php 
	$path = (array_key_exists('path', $fields))? $fields['path']->content : NULL;
	$title = (array_key_exists('title', $fields))? $fields['title']->raw : t('');
	$uri = (array_key_exists('uri', $fields))? file_create_url($fields['uri']->raw) : NULL;
	$image = file_create_url($uri);
	$colour = (array_key_exists('field_colour', $fields))? $fields['field_colour']->content : t('transparent');

	$title_frag = explode(" ", $title);
	$split = (array_key_exists('field_bold_words', $fields))? $fields['field_bold_words']->content : round(count($title_frag) / 2);
	if (count($title_frag) > 1) {
		$title_first = array_slice($title_frag, 0, $split);
		$title_last = array_slice($title_frag, $split);
	}
	else {
		$title_first = array($title);
		$title_last = array();
	}
?>
<a href="<?php print $path; ?>" style="background-color: <?php print $colour; ?>;">
	<div class="client-service">
		<img src="<?php print $image; ?>" class="hvr-bounce-in">
		<h3><span><?php print implode(" ", $title_first); ?></span> <?php print implode(" ", $title_last); ?></h3>
	</div>
</a>