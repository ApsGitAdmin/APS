<?php 
  $Colour = $fields['field_colour']->content; 
  $Title = $fields['title'];
  $Tagline = $fields['field_tagline']->content; 
  $Body = $fields['body']->content;
  $Vimeo = $fields['field_vimeo'];
  $VimeoThumb = strip_tags($fields['field_vimeo_thumb']->content, '<img>');
  $VimeoThumbLink = preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $fields['field_vimeo_thumb']->content, $match);
  $Posterfile = file_load($fields['fid']->content);
  $Poster = theme_image_style(array(
      'style_name' => 'service_image',
      'path' => $Posterfile->uri,
      'width' => 0,
      'height' => 0,
      'alt' => $Title->content,
      'title' => $Title->content,
    )
  );
  
  $Anchor = str_replace(' ', '-', strtolower($fields['title']->raw)).'-anchor';
?>

<article name="<?php print $Anchor; ?>" id="<?php print $Anchor; ?>">
  <div class="services <?php print $zebra; ?> clearfix">
    <div class="services-header">
      <h1 class="minimo-bold">
      <h1 class="minimo-bold" style='color: <?php print $Colour; ?>'>
        <?php 
          //print $Title->label_html;
          print $Title->content;
        ?>
      </h1>
      <p class="tagline">
        <span style='background-color: <?php print $Colour; ?>' class="minimo-light uppercase"><?php print $Tagline;?></span>
      </p>
    </div>
    <div class="video-container">
      <?php print l($Poster, $Vimeo->content,  array('html' => TRUE, 'attributes' => array('class' => 'magnific-popup'))); ?>
    </div>
    <div class="services-text">
      <?php print $Body; ?>
      <?php if (!empty($VimeoThumb)): ?>
        <div class="video-thumbnail" style="background-color: <?php print $Colour; ?>">
            <?php print l($VimeoThumb, $match[0][0], array('html' => TRUE, 'attributes' => array('class' => 'magnific-popup'))); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</article>