<?php
    $body = $fields['body']->content;
    $colour = $fields['field_colour']->content; 
    $image = $fields['field_services_image']->content;
    $tagline = $fields['field_tagline']->content;
    $title = $fields['title']; 
    $portfolio = $fields['view']->content;
    $vimeo = $fields['field_vimeo']->content;
    
    $width = ($vimeo || $image)? 'half' : 'full';
    
    $anchor = str_replace(' ', '-', strtolower($fields['title']->raw));
?>

  <div id='<?php print $anchor; ?>' class="clearfix">
    <div class="services <?php print $zebra; ?> <?php print $width; ?> clearfix">
      <div class="services-header">
        <h1 class="minimo-bold" style='color: <?php print $colour; ?>'>
          <?php 
            $fancy_title = explode(" ", $title->content);
            print "<span class='minimo-light'>" . array_shift($fancy_title) . "</span>" . implode(" ", $fancy_title);
          ?>
        </h1>
        <?php if ($tagline): ?>
          <p class="tagline">
            <span style='background-color: <?php print $colour; ?>' class="minimo-light uppercase"><?php print $tagline;?></span>
          </p>
        <?php endif; ?>
      </div>
      <?php if ($vimeo || $image): ?>
        <div class="video-container">
          <?php if ($vimeo): ?>
            <?php print $vimeo; ?>
          <?php else: ?>
            <?php print $image; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="services-text <?php print $width; ?>">
        <?php print $body; ?>
      </div>
    </div>
    <?php if (!empty($portfolio)): ?>
      <div class="portfolio clearfix">
        <?php print $portfolio; ?>
      </div>
    <?php endif; ?>
  </div>