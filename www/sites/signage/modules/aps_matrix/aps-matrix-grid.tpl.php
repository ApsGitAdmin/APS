  <div class="aps-matrix-grid-content">
    <table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
      <?php if (!empty($title) || !empty($caption)) : ?>
        <caption><?php print $caption . $title; ?></caption>
      <?php endif; ?>
      <?php if (!empty($headers)) : ?>
        <thead>
          <?php foreach ($headers as $header_count => $header): ?>
            <tr>
              <?php 
                foreach ($header as $cell) {
                  print _theme_table_cell($cell, TRUE);
                }
              ?>
            </tr>
          <?php endforeach; ?>
        </thead>
      <?php endif; ?>
      <tbody>
        <?php foreach ($rows as $row_count => $row): ?>
          <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
          <?php
            foreach ($row as $cell) {
              print _theme_table_cell($cell);
            }
          ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>