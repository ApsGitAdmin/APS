<?php 
  $Colour = $fields['field_colour']->content; 
  $Title = $fields['title'];
  $Tagline = $fields['field_tagline']->content; 
  $Body = $fields['body']->content;
  
  $Anchor = str_replace(' ', '-', strtolower($fields['title']->raw)).'-anchor';
?>

<a name='<?php print $Anchor; ?>' id='<?php print $Anchor; ?>'>
  <div class="careers <?php print $zebra; ?> clearfix">
    <div class="careers-header">
      <h1 class="minimo-bold" style='color: <?php print $Colour; ?>'>
        <?php 
          $Title = explode(" ", $Title->content);
          print '<span class="minimo-light uppercase">' . array_shift($Title) . '</span>' . trim(implode(" ", $Title));
        ?>
      </h1>
      <p class="tagline">
        <span style='background-color: <?php print $Colour; ?>' class="minimo-light uppercase"><?php print $Tagline;?></span>
      </p>
    </div>
    <div class="careers-text">
      <?php print $Body; ?>
    </div>
  </div>
</a>