<?php if($messages): ?>
<div id="drupal_messages"><div class="alert-box message"><?php print $messages; ?></div></div>
<?php endif;?>
<!-- Start Navigation -->
<nav>
  <div class="container">
    <div class="sixteen columns">
      <div class="menu" id="nav"> 
        <!-- Start Nav Menu -->
        <?php if (module_exists('i18n_menu')) {
              $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
              $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            }
            print drupal_render($main_menu_tree);?>
      </div>
      <!-- End Nav Menu --> 
      <!-- Start Dropmenu for mobile -->
		<div id="navigation"></div>
      <!-- End Dropmenu for mobile --> 
    </div>
  </div>
</nav>
<!-- End Navigation --> 


<!-- Content Page -->
<div class="container">
<div class="sixteen columns blogTitle">
  <h1><span>Our</span><br>
    Blog</h1>
</div>
  <div class="eleven columns">
  <?php print render($page['content']); ?>
  </div>
  
   <!-- Sidebar -->
  <div class="four columns offset-by-one">
    <div class="sidebar"> 
    	<?php print render($page['sidebar']); ?>
    </div>
  </div>
  <!-- end sidebar --> 
  
</div>
<!-- End of Content Page -->
<!--start footer-->

<div id="footer">
  <div class="container">
    <?php if ($page['footer']): ?>
    <?php print render($page["footer"]); ?>
    <?php endif; ?>
    <?php if ($page['copyright']): ?>
    <div class="sixteen columns"> <?php print render($page["copyright"]); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!--end footer--> 

