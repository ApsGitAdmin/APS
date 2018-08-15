<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (array_key_exists('field_client_banner', $content) && $content['field_client_banner']): ?>
        <?php $uri = $content['field_client_banner'][0]['#item']['uri']; $image = file_create_url($uri); ?>
        <div class="client-banner" style="background-image: url(<?php print $image; ?>);">
            RENDER THE BANNER THINGY HERE, the URL for the banner is called $image, just render it as necessary, as an image or a background etc
        </div>
    <?php endif; ?>
    <?php if ($body): ?>
        <div class="client-body">
            THIS IS YOUR BODY TEXT - IT'S COMING FROM THE NODE--CLIENT.TPL
            <?php print $body[LANGUAGE_NONE][0]['safe_value']; ?>
        </div>
    <?php endif; ?>
</div>