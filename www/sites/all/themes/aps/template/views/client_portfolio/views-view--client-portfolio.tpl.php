	<?php if ($header): ?>
    	<?php print $header; ?>
  	<?php endif; ?>

  	<?php if ($rows): ?>
      <div class="clearfix">
    	  <?php print $rows; ?>
      </div>
  	<?php endif; ?>

  	<?php if ($footer): ?>
  		<?php if (user_access('Client Portfolio: Create new content')): ?>
        <div class="portfolio-view-footer clearfix">
          <h3 class="minimo-light uppercase">Create new Portfolio</h3>     		 
          <?php print $footer; ?>
        </div>
   		<?php endif; ?>
  	<?php endif; ?>