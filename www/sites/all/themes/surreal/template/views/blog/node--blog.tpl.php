<?php 
hide($content['comments']); 
hide($content['links']); 
hide($content['field_tags']); 
$content['field_tags']['#label_display']='hidden'; 
hide($content['field_blog_images']); 
hide($content['field_blog_video']); 
$Video = @str_replace(" ", "",$node->field_blog_video[$node->language][0]['value']); 
$field_blog_images = field_get_items('node', $node, 'field_blog_images'); ?>
<div id="node-<?php print $node->nid; ?>" class="eleven columns <?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="post post-single">
        <div class="inner-spacer-right-lrg">
            <div class="post-title <?php print $classes; ?>" >
                <?php print render($title_prefix); ?>
                <h3>
                    <a href="<?php print $node_url; ?>">
                        <?php print $title; ?>
                    </a>
                </h3>
                <?php print render($title_suffix); ?>
                <div class="post-meta">
                    <?php print t( "By"); ?>
                    <a href="#">
                        <?php print $name; ?>
                    </a>
                    <div class="dateWrap">
                        <div class="date-day"><?php print format_date($node->created, 'custom', 'd'); ?></div>
                        <div class="date-month"><?php print format_date($node->created, 'custom', 'M'); ?></div>
                        <div class="date-year"><?php print format_date($node->created, 'custom', 'Y'); ?></div>
                    </div>
                </div>
            </div>
            <?php if(!empty($Video)):?>
            <?php if(is_numeric($Video)): ?>
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
            <?php if (!empty($field_blog_images)): ?>
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php foreach ($field_blog_images as $img): ?>
                    <li>
                        <?php $img_view=file_create_url($img[ 'uri']); ?>
                        <?php print theme( 'image_style', array( 'style_name'=>'blog', 'path' => $img['uri'])); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif;?>
            <?php endif; ?>
        </div>
        <div class="post-body">
            <?php print render($content);?>
        </div>
    </div>
    <?php if (render($content[ 'field_tags'])): ?>
    <div class="tags">
        <?php print render($content[ 'field_tags']); ?>
    </div>
    <?php endif; ?>
</div>

<?php print render($content['comments']);?>