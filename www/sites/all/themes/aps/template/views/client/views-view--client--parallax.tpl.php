<?php if ($header): ?>
	<div class="parallax fixed" style="background: url('<?php print file_create_url($header); ?>')">
		<?php if ($rows): ?>
		   	<?php print $rows; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>
<?php if ($footer): ?>
    <div class="container">
      <div class="sixteen columns"> 
        <div class="client-header">
          <p>
        		<?php print $footer; ?>
        	</p>
        </div>
      </div>
    </div>
<?php endif; ?>