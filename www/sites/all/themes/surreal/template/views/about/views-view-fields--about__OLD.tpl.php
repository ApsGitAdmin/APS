<?php 
  $Colour = $fields['field_colour']->content; 
  $Title = $fields['title'];
  $Tagline = $fields['field_tagline']->content; 
  $Body = $fields['body']->content;
  $Poster = file_load($fields['fid']->content);
  $JWVideo = $fields['uri']->content;
  
  $Anchor = str_replace(' ', '-', strtolower($fields['title']->raw)).'-anchor';
  $JWPlayer = str_replace(' ', '-', strtolower($fields['title']->raw)).'-player';

  if (substr($JWVideo, -3) == 'rss') {
    $playlist = "'".substr($JWVideo, 5)."'";
  } else {
    $playlist = "[{ image: '".file_create_url($Poster->uri)."', sources: [{ file: '".$JWVideo."', }] }]";
  }
?>

<a name='<?php print $Anchor; ?>' id='<?php print $Anchor; ?>'>
  <div class="about <?php print $zebra; ?> clearfix">
    <div class="about-header">
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
      <div id='<?php print $JWPlayer; ?>'></div>
     <script type='text/javascript'>
          jwplayer('<?php print $JWPlayer; ?>').setup({
            width: '100%',
            aspectratio: '16:9',
            playlist: <?php print $playlist; ?>,
            primary: 'flash',
          });
      </script>
    </div>
    <div class="about-text">
      <?php print $Body; ?>
    </div>
  </div>
</a>


