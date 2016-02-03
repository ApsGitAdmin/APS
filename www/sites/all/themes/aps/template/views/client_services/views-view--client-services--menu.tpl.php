<div class="container">
  <?php if ($rows): ?>
    <?php print $rows; ?>
  <?php elseif ($empty): ?>
      <?php print $empty; ?>
  <?php endif; ?>
</div>