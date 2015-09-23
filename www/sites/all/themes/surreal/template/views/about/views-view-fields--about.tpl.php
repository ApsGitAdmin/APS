<?php 
  $Colour = $fields['field_colour']->content; 
  $Title = $fields['title'];
  $Tagline = $fields['field_tagline']->content; 
  $Body = $fields['body']->content;
  $Vimeo = $fields['field_vimeo'];
  
  $Anchor = str_replace(' ', '-', strtolower($fields['title']->raw)).'-anchor';
?>

<a name='<?php print $Anchor; ?>' id='<?php print $Anchor; ?>'>
  <div class="services <?php print $zebra; ?> clearfix">
    <div class="services-header">
      <h1 class="minimo-bold" style='color: <?php print $Colour; ?>'>
        <?php 
          print $Title->label_html;
          
          $path = drupal_get_path('theme', 'surreal');
          $path .= '/images/thinkaps.png';
          
          print theme_image(array('path' => $path, 'width' => 108, 'height' => 49, 'attributes' => array('class' => array('aps'))));
        ?>
      </h1>
      <p class="tagline">
        <span style='background-color: <?php print $Colour; ?>' class="minimo-light uppercase"><?php print $Tagline;?></span>
      </p>
    </div>
    <div class="video-container">
      <?php print $Vimeo->content; ?>
    </div>
    <div class="services-text">
      <?php print $Body; ?>
    </div>
  </div>
</a>