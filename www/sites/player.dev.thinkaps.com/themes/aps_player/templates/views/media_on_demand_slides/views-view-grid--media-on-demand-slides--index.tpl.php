<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php 
foreach ($rows as $result_number => $results) {
  $pages = array_chunk($results, 16, TRUE);
} 
?>
<?php foreach ($pages as $row_number => $columns): ?>
  <table <?php print $attributes; ?>>
    <tbody>
      <tr <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
        <?php foreach ($columns as $column_number => $item): ?>
          <td <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>>
            <?php print $item; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
<?php endforeach; ?>
