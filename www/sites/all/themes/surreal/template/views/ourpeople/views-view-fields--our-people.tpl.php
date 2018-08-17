<?php 
$name = $fields['name']->content; 
$job = $fields['field_job_position']->content; 
$email = $fields['mail']->content;
$colour = $fields['field_colour']->content;
$uri = $fields['uri'];

$imageinfo = image_get_info($uri->raw);
$variables = array('style_name' => 'our_people', 'path' => $uri->raw, 'width' => $imageinfo['width'], 'height' => $imageinfo['height'], 'alt' => strip_tags($name));
$photo = theme_image_style($variables);

$split_name = explode(" ", $name);
list($r, $g, $b) = sscanf($colour, "#%02x%02x%02x");
?>
<div class="teamBlock column <?php print $zebra; ?>">
    <div class="teamImage" style="background-color:<?php print $colour;?>"><?php print $photo; ?>
        <div class="teamName" style="background-color: rgba(<?php print $r . ',' . $g . ',' . $b; ?>,0.4);">
        	<?php if(strpos($email, "woof") !== false): ?>
        		<h2><div class='minimo-bold'><?php print $name; ?></div></h2>
        	<?php else: ?>
        		<h2><div class='minimo-bold'><?php print array_shift($split_name) . "<br/>" . implode(" ", $split_name); ?></div></h2>
	        <?php endif; ?>
		    <h3><?php print $job;?></h3>
		    <ul class="socialLinksTeam">
		    	<li>
			    	<a href="mailto:<?php print $email;?>" data-original-title="Email">
			            <!--<span class="icon-envelop"></span>-->
			            <?php print $email;?>
			        </a>
			    </li>
		    </ul>
		    <!--<a class="aps-email"><?php print $email;?></p>-->
        </div>
    </div>
</div>
