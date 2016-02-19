<?php
	$icon = $fields['field_client_menu_icon']->content;

	$anchor = preg_replace("/[^a-z]/", '', strtolower($fields['title']->raw)) . '-parallax';
	$title = explode(" ", $fields['title']->raw);
	$fancy_title = "<span class='minimo-light'>" . array_shift($title) . "</span> " . implode(" ", $title);
	$link = l($fancy_title, '', array('fragment' => $anchor, 'external' => TRUE, 'html' => TRUE));
?>
<div class="menu-link">
	<table cellspacing="0" cellpadding="0" class="header">
		<tr>
			<td class="menu-icon"><?php print $icon; ?></td>
			<td class="menu-text"><?php print $link; ?></td>
		</tr>
	</table>
</div>

