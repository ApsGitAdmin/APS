<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (array_key_exists('field_client_banner', $content) && $content['field_client_banner']): ?>
        <?php $uri = $content['field_client_banner'][0]['#item']['uri']; $image = file_create_url($uri); ?>
        <div class="client-banner" >
            <img src="<?php print $image; ?>">
        </div>
    <?php endif; ?>
    <?php if ($body): ?>
        <div class="client-body">
            <?php print $body[LANGUAGE_NONE][0]['safe_value']; ?>
        </div>
    <?php endif; ?>
    <div class="client-subcontent">
        <?php 
            if(!empty(views_get_view_result('client_services', 'services'))) {
                print '<h2>SERVICES</h2>';
                print views_embed_view('client_services', 'services');
            } 
            if(!empty(views_get_view_result('client_gallery', 'gallery'))) {
                print '<h2>PORTFOLIO</h2>';
                print views_embed_view('client_gallery', 'gallery');
            } 
        ?>
    </div>
</div>

<!-- Return to aps -->
<?php $front_page = url(variable_get('site_frontpage', 'node'), array('absolute' => TRUE)); ?>
<div class="space40"></div>
<div class="container">
    <div class="sixteen columns">
        <div class="return">
            <a href="<?php print $front_page; ?>" title="<?php print t('Return to aps Website'); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'aps') . '/css/images/aps-return.png'; ?>" alt="<?php print t('Return to aps Website'); ?>" /></a>
        </div> 
    </div>
</div>
<!-- End of Return -->