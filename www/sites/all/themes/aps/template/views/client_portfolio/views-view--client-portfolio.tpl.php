	<?php if ($header): ?>
    	<?php print $header; ?>
  	<?php endif; ?>

  	<?php if ($rows): ?>
    	<?php print $rows; ?>
  	<?php endif; ?>

  	<?php if ($footer): ?>
  		<?php if (user_access('Client Portfolio: Create new content')): ?>
     		<?php print $footer; ?>
   		<?php endif; ?>
  	<?php endif; ?>