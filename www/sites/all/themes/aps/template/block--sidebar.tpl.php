<div id="<?php print $block_html_id; ?>" class="widget <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
<h3><?php print $block->subject ?></h3>
<?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="textwidget">
    <?php print $content ?>
  </div>
</div>
