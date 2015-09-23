<?php 
$Link = $fields['field_clients_link']->content;
$Image = $fields['field_clients_logo']->content;
 ?>
<li>
<?php if(!empty($Link)){?>
<a href="<?php print $Link; ?>" target="_blank"><?php print $Image; ?></a>
<?php }else {?>
<?php print $Image; ?>
<?php }?>
</li>
