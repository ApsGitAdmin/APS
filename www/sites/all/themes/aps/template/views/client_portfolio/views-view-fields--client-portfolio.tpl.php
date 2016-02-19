<?php 
  $body = $fields['body']->content;
  $colour = $fields['field_colour']->content;
  preg_match('@src="([^"]+)"@', $fields['field_portfolio_image']->content, $image);
  $output = $fields['field_output']->content;
  $title = $fields['title']->content; 
  $tagline = $fields['field_tagline']->content;
  $thumb = $fields['field_thumbnail']->content;
  $url = $fields['field_link']->content;
  $vimeo = $fields['field_vimeo']->content;
  $counter = $fields['counter']->content;

  $numbers = array(1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six');
  $spacing = $view->spacing;

  if ($output == 'video' && !empty($vimeo)) {
    $link = l(t('<i class="icon-youtube"></i>'), $vimeo, array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'rel' => array('prettyPhoto'))));
  } elseif ($output == 'link' && !empty($url)) {
    $link = l(t('<i class="icon-arrow-right"></i>'), $url, array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'target' => '_blank')));
  } else {
    $link = l(t('<i class="icon-camera"></i>'), array_pop($image), array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'rel' => array('prettyPhoto'))));
  }
?>
<div class="client-portfolio-block <?php print $numbers[$spacing[$counter]]; ?> columns <?php print $zebra; ?>" style="background-color:<?php print $colour;?>">
  <div class="client-portfolio-image">
    <?php print $thumb; ?>
  </div>
  <div class="client-portfolio-overlay fractal-<?php print $numbers[rand(1,5)]; ?>">
    <div class="client-portfolio-name">
      <span>
        <h3><?php print $tagline; ?></h3>
        <h2><?php print $title; ?></h2>
      </span>
    </div>
    <div class="client-portfolio-icon">
      <span>
        <?php print $link; ?>
      </span>
    </div>
  </div>
</div>