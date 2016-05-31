<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<?php if ($rows): ?>
  <div id="slide-controls">
    <div id="slide-nav">
      <div data-control="slide" data-dir="prev" class="prev-slide">&#9664;</div>
      <span class="current-slide">1</span> / <span class="total-slide"><?php print $total; ?></span>
      <div data-control="slide" data-dir="next" class="next-slide">&#9654;</div>
    </div>
    <div id="slide-options">
      <span class="switch">Slide Index</span>
      <span class="switch">Enlarge</span>
    </div>
  </div>
  <div id="slide-display">
    <?php print $rows; ?>

    <?php if ($attachment_after): ?>
      <?php print $attachment_after; ?>
    <?php endif; ?>
  </div><?php /* class view */ ?>
<?php elseif ($empty): ?>
  <?php print $empty; ?>
<?php endif; ?>