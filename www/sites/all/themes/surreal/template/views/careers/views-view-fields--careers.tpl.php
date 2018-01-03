<?php 
  $Colour = $fields['field_colour']->content; 
  $Title = $fields['title'];
  $Tagline = $fields['field_tagline']->content; 
  $Body = $fields['body']->content;
  $Link = $fields['field_workable']->content;
?>


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
    <p class="workable minimo-light uppercase" style='background-color: <?php print $Colour; ?>'>
      <?php print $Link; ?>
    </p>
  </div>
</div>
