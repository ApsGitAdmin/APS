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
<?php $classes = (array_key_exists('field_additional_classes', $fields))? $fields['field_additional_classes']->content : 'alpha grid-16 clearfix omega'; ?>
<div class="<?php print $classes ?> list-item">
	<?php
		if (array_key_exists('edit_node', $fields)) {
			print $fields['edit_node']->content; 
		}
	?>
	<!-- If the link is to a custom page -->
	<?php if (array_key_exists('field_custom_path', $fields)): ?>
		<a href="<?php print $fields['field_custom_path']->content; ?>">
	<!-- If the link is to a Vimeo or Livestream video -->
	<?php elseif ($fields['url'] != '#' && $fields['type']->raw != 'menu_page'): ?>
		<!-- If the link has chapters -->
		<?php if (array_key_exists('field_chapters', $fields)): ?>
			<?php $div_id = $fields['edit_node']->raw; ?>
			<?php $vimeo_id = get_vimeo_id_from_url($fields['field_vimeo']->content); ?>
			<div id="chapters-<?php print $div_id; ?>" class="embedded-video-chapters">
				<div class="sixteen-nine">
					<iframe title="<?php print $fields['title']->content; ?>" src="//player.vimeo.com/video/<?php print $vimeo_id; ?>?color=5f5f5f&amp;portrait=0&amp;title=0&amp;byline=0&amp;api=1&amp;player_id=vimeo-player-<?php print $div_id; ?>" frameborder="0" width="100%" height="664" id="vimeo-player-<?php print $div_id; ?>"></iframe>
				</div>
				<?php print $fields['field_chapters']->content; ?>
			</div>
			<a class="litebox" data-litebox-ratio="video-chapter" data-litebox-group="group-<?php print $fields['field_menu_page']->content; ?>" data-litebox-text="<?php print $fields['title']->content; ?>" target="_self" href="#chapters-<?php print $fields['edit_node']->raw; ?>">
		<?php else: ?>
			<a class="litebox" data-litebox-ratio="sixteen-nine" data-litebox-group="group-<?php print $fields['field_menu_page']->content; ?>" data-litebox-text="<?php print $fields['title']->content; ?>" href="<?php print $fields['url']; ?>">
		<?php endif; ?>
	<!-- If the link is to a menu page -->
	<?php else: ?>
		<a href="<?php print $fields['url']; ?>">
	<?php endif; ?>
	    <?php print $fields['title']->content; ?>
	    <?php if (array_key_exists('field_subtitle', $fields)) print $fields['field_subtitle']->content; ?>
	</a>
</div>