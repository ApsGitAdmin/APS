<?php 
//print "<pre>";  
//print_r($content). "</pre>";
hide($content['comments']); 
hide($content['links']); 
hide($content['field_tags']);  
hide($content['author']);
hide($content['body']); 
hide($content['field_image']); 
 
$content['field_image']['#label_display']='hidden'; 
$content['field_tags']['#label_display']='hidden'; 

$field_blog_images = field_get_items('node', $node, 'field_image'); ?>
<div id="node-<?php print $node->nid; ?>" class="eleven columns <?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="post post-single">
        <div class="inner-spacer-right-lrg">
            <div class="post-title <?php print $classes; ?>" >

                <h3>
                    <a href="<?php print $node_url; ?>">
                        <?php print $title; ?>
                    </a>
                </h3>
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
            <?php if (!empty($field_blog_images)): ?>
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php foreach ($field_blog_images as $img): ?>
                    <li>
                        <?php $img_view=file_create_url($img['uri']); ?>
                        <?php print theme( 'image_style', array( 'style_name'=>'blog', 'path' => $img['uri'])); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif;?>
        </div>
        <div class="post-body">
            <?php print render($content['body']);?>
        </div>
    </div>
    <?php if (render($content[ 'field_tags'])): ?>
    <div class="tags">
        <?php print render($content[ 'field_tags']); ?>
    </div>
    <?php endif; ?>
</div>

<?php print render($content['comments']);?>