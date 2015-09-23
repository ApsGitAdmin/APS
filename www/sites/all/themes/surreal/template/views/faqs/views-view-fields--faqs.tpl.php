<?php 
$Title = $fields['title']->raw;
$Body = $fields['body']->content;
 ?>
<span class="accTrigger question"><a href="#"><?php print t($Title); ?></a></span>
<div class="accContainer">
  <div class="accContent"><?php print t($Body); ?></div>
</div>
