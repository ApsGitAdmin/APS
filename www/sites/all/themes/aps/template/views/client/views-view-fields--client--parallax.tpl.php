<?php 
	$body = $fields['body']->content;
	$menu = $fields['view'];
?>

<div class="listWrap">
    <div class="list">
        <div class="container">
            <div class="sixteen columns"> 
                <p>
                    <?php print ($body); ?>
                </p>
            	<?php print ($menu->content); ?>
            </div>
        </div>
    </div>
</div>