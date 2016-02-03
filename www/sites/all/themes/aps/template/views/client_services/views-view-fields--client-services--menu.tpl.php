<?php
	$icon = $fields['field_client_menu_icon']->content;

	$anchor = preg_replace("/[^a-z]/", '', strtolower($fields['title']->raw)) . '-parallax';
	$link = l($fields['title']->raw, '', array('fragment' => $anchor, 'external' => TRUE));
?>
<div class="menu-link">
	<div class="menu-icon"><?php print $icon; ?></div>
	<span class="menu-text"><?php print $link; ?></span>
</div>

