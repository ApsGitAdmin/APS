<div class="<?php print $classes; ?>">
	<?php if ($header): ?>
    <div class="categories-view-header">
      <?php print $header; ?>
    </div>
	<?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <?php print $rows; ?>
  <?php elseif ($empty): ?>
    <div class="categories-view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

    <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($footer): ?>
    <?php if (user_access('Client Services: Create new content')): ?>
      <div class="categories-view-footer clearfix">
        <h3 class="minimo-light uppercase">Create new Category</h3>
        <?php print $footer; ?>
      </div>
    <?php endif; ?>
  <?php endif; ?>
</div>