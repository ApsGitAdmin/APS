<?php
    $parallax = $fields['field_parallax']->content;
    $body = $fields['body']->content;
    $colour = $fields['field_colour']->content; 
    $image = $fields['field_services_image']->content;
    $tagline = $fields['field_tagline']->content;
    $title = $fields['title']; 
    $portfolio = $fields['view']->content;
    $vimeo = $fields['field_vimeo']->content;
    
    $width = ($vimeo || $image)? 'half' : 'full';
    
    $anchor = preg_replace("/[^a-z]/", '', strtolower($fields['title']->raw));
    $file = ($parallax)? file_load($parallax) : NULL;
    $filepath = ($file)? file_create_url($file->uri) : '';
?>
<div id='<?php print $anchor; ?>-parallax' class="parallax fixed" style="background: url(<?php print $filepath; ?>);">
  <div class="quoteWrap">
    <div class="quote">
      <div class="container clearfix">
        <div class="services <?php print $zebra; ?> <?php print $width; ?> clearfix">
          <?php if ($zebra == 'odd'): ?>
            <?php if ($vimeo || $image): ?>
            <div class="video-container hidden-phone">
              <?php if ($vimeo): ?>
                <?php print $vimeo; ?>
              <?php else: ?>
                <?php print $image; ?>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          <?php endif; ?>
          <div class="services-container clearfix">
            <span>
              <div class="services-header">
                <h1 class="minimo-bold">
                  <?php 
                    $fancy_title = explode(" ", $title->content);
                    print "<span class='minimo-light'>" . array_shift($fancy_title) . "</span>" . implode(" ", $fancy_title);
                  ?>
                </h1>
                <?php if ($tagline): ?>
                  <p class="tagline">
                    <span style="color: <?php print $colour; ?>" class="minimo-light uppercase"><?php print $tagline;?></span>
                  </p>
                <?php endif; ?>
              </div>
              <div class="services-text <?php print $width; ?>">
                <?php print $body; ?>
              </div>
            </span>
          </div>
          <?php if ($zebra == 'even'): ?>
            <?php if ($vimeo || $image): ?>
            <div class="video-container hidden-phone">
              <?php if ($vimeo): ?>
                <?php print $vimeo; ?>
              <?php else: ?>
                <?php print $image; ?>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <?php if (!empty($portfolio)): ?>
    <div class="portfolio clearfix">
      <?php print $portfolio; ?>
    </div>
  <?php endif; ?>
</div>