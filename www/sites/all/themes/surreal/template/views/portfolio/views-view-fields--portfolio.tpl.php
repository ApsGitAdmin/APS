<?php 
  $category = $fields['title_1']->content;
  $uri = $fields['uri'];
  $title = $fields['title']->raw;
  $videopath = $fields['field_video']->content;
  $summary = $fields['field_tagline']->content;
  $description = $fields['body']->content;
  $colour = $fields['field_colour']->content;

  $imageinfo = image_get_info($uri->raw);
  $variables = array('style_name' => 'portfolio', 'path' => $uri->raw, 'width' => $imageinfo['width'], 'height' => $imageinfo['height'], 'alt' => strip_tags($title));
  $thumbnail = theme_image_style($variables);
 ?>

<article class="portfolio" data-category="<?php print t($category);?>">
  <section class="thumbImage"><?php print $thumbnail; ?>
    <div class="thumbTextWrap" style="background-color:<?php print $colour;?>">
    <div class="thumbText">
      <!--<h3 class="sectionTitle"><?php print t($title); ?></h3>-->
      <!--<p><?php print t($summary); ?></p>-->
        <a class="thumbLink" href='<?php print (!empty($videopath)) ? $videopath : $uri->content; ?>' rel="prettyPhoto" title='<?php //print t($description); ?>'><i class="icon-search"></i></a>
    </div>
   </div>
  </section>
</article>
