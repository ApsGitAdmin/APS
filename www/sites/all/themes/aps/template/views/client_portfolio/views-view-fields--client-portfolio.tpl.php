<?php 
  $body = $fields['body']->content;
  $colour = $fields['field_colour']->content;
  $nid = $fields['nid']->content;
  preg_match('@src="([^"]+)"@', $fields['field_portfolio_image']->content, $image);
  $output = $fields['field_output']->content;
  $tagline = $fields['field_tagline']->content;
  $title = $fields['title']->content; 
  $thumb = $fields['field_thumbnail']->content;
  $url = $fields['field_link']->content;
  $vimeo = $fields['field_vimeo']->content;

  if ($output == 'video' && !empty($vimeo)) {
    $link = l(t('<i class="icon-youtube"></i>'), $vimeo, array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'rel' => array('prettyPhoto'))));
  } elseif ($output == 'link' && !empty($url)) {
    $link = l(t('<i class="icon-arrow-right"></i>'), $url, array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'target' => '_blank')));
  } else {
    $link = l(t('<i class="icon-camera"></i>'), array_pop($image), array('html' => true, 'attributes' => array('title' => t($title), 'alt' => t($body), 'class' => array('thumbLink'), 'rel' => array('prettyPhoto'))));
  }
?>
<div class="portfolioBlock column <?php print $zebra; ?>">
  <div class="portfolioImage" style="background-color:<?php print $colour;?>"><?php print $thumb; ?>
    <div class="portfolioOverlay">
      <i class="icon-search"></i>
    </div>
    <div class="portfolioName">
      <h2><?php print $title; ?></h2>
      <h3><?php print $tagline; ?></h3>
      <ul class="portfolioIcon">
        <li>
          <?php print $link; ?>
        </li>
      </ul>
    </div>
  </div>
</div>