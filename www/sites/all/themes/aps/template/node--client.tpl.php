<?php 
hide($content['comments']); 
hide($content['links']); 
hide($content['field_tags']); 
hide($content['author']);
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="post-single">
        <div class="inner-spacer-right-lrg">
            <div class="clearfix">
                <?php print render($content); ?>
            </div>
        </div>
    </div>
    <?php if (render($content['field_tags'])): ?>
    <div class="tags">
        <?php print render($content[ 'field_tags']); ?>
    </div>
    <?php endif; ?>
</div>

<?php print render($content['comments']);?>