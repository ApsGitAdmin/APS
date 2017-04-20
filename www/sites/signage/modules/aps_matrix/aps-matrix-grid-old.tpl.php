  <?php foreach ($days as $day): ?>  
    <table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
      <?php if (!empty($day['title'])): ?>
        <caption><?php print $day['title']; ?></caption>
      <?php endif; ?>
      <?php if (!empty($day['header'])) : ?>
        <thead>
          <tr>
            <?php 
              foreach ($day['header'] as $cell) {
                print _theme_table_cell($cell, TRUE);
              }
            ?>
          </tr>
        </thead>
      <?php endif; ?>
      <tbody>
        <?php $count = 0; ?>
        <?php foreach ($day['rows'] as $row_count => $row): ?>
          <tr class="<?php print ($count++ % 2 == 0) ? 'odd' : 'even'; ?>">
          <?php
            foreach ($row as $cell) {
              print _theme_table_cell($cell);
            }
          ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endforeach; ?>