<?php if ($header): ?>
	<div id="client-parallax" class="parallax fixed" style="background: url('<?php print file_create_url($header); ?>')">
		<?php if ($rows): ?>
		   	<?php print $rows; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>
