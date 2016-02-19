<?php if ($header): ?>
	<div style="background: url('<?php print file_create_url($header); ?>') center center transparent repeat">
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