<div<?php print $attributes; ?>>
  <h4<?php print $title_attributes; ?>><?php print $title ?></h4>  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>