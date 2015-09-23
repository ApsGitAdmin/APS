<?php 
	$Title = $fields['title']->content;
	$Link = $fields['view_node']->content;
	$Body = $fields['body']->content;
	$Images = $fields['field_blog_images']->content;
	$Video = str_replace(" ", "", $fields['field_blog_video']->content);
	$Day = $fields['created']->content;
	$Month = $fields['created_1']->content;
	$Year = $fields['created_2']->content;
	$Author = $fields['name']->content;
	$Tags = $fields['field_tags']->content;
?>



<div class="post post-single">
  <div class="inner-spacer-right-lrg">
    <div class="post-title">
      <h3><?php print $Title;?></h3>
      <div class="post-meta"> <?php print t("By ") . $Author;?>
        <div class="dateWrap">
          <div class="date-day"><?php print $Day; ?></div>
          <div class="date-month"><?php print $Month; ?></div>
          <div class="date-year"><?php print $Year; ?></div>
        </div>
      </div>
    </div>
    <?php if(!empty($Video)):?>
		<?php if(is_numeric($Video)):	?>
        <div class="post-media">
          <div class="embed-container">
            <iframe src="//player.vimeo.com/video/<?php print $Video;?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
          </div>
        </div>
        <?php else:?>
        <div class="post-media">
          <div class="embed-container">
            <iframe src="//www.youtube.com/embed/<?php print $Video;?>" width="500" height="281" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <?php endif; ?>

    <?php else: ?>
    <div class="post-media">
    <?php print $Images; ?>
	</div>
	<?php endif; ?>
    
    
    <div class="post-body"><?php print $Body;?>
      <div><span class="more-link"><?php print $Link;?></span></div>
    </div>
    <div class="tags"><?php print $Tags; ?></div>
  </div>
</div>
