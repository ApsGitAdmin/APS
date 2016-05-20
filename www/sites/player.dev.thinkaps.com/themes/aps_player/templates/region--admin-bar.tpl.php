<?php 
/**
 * @file
 * Alpha's theme implementation to display a region.
 */
?>
<?php global $user; if (in_array('administrator', $user->roles)): ?>
	<div class="admin-content clearfix">
		<div<?php print $attributes; ?>>
		  <div<?php print $content_attributes; ?>>
		    <?php 
		    	if ($content) {
		    		print $content; 
		    	} else {
		    		print t('No Admin controls available');
		    	}
		    ?>
		  </div>
		</div>
	</div>
	<div id="admin-bar-tab" class="push-7 grid-2 drawer">
		&#9776; Admin
	</div>
<?php endif; ?>