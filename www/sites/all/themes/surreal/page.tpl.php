<div id="top"></div>
<?php if(drupal_is_front_page()): ?>
<!-- Start Navigation -->
<nav>
  <div class="container">
    <div class="sixteen columns">
      <!-- logo & slogan -->
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="logoContainer"> <img src="<?php print $logo; ?>" class="logo" width="186" height="100" alt="<?php print t('Home'); ?>" /> </a>
      <?php endif; ?>
      <!-- End logo & slogan --> 
      <div id="nav" class="menuContainer hidden-phone"> 
        <!-- Start Nav Menu -->
        <?php if (module_exists('i18n_menu')) {
              $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
              $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            }
            print drupal_render($main_menu_tree);
          ?>
      </div>    
      <!-- End Nav Menu --> 
    </div>
    
  </div>
</nav>
<!-- End Navigation --> 
<div id="page">
  <div id="homepage" class="homepage section">
    <div id="r0"></div>
    
    <!-- Region Hero -->  
    <!-- XMAS LINK BLOCK -->
    <div id="xmas" class="hidden-phone"><a href="http://www.thinkaps.com/christmas-photo-entries" title="Christmas Photo Entry!"><img src="<?php global $base_path; print $base_path . drupal_get_path('theme', 'surreal'); ?>/images/Xmas-Frame.png" /></a></div>
    <div id="xmas-phone" class="visible-phone"><a href="http://www.thinkaps.com/christmas-photo-entries" title="Christmas Photo Entry!"><img src="<?php global $base_path; print $base_path . drupal_get_path('theme', 'surreal'); ?>/images/Xmas-Frame-Mobile.png" /></a></div>
    <?php if ($page['hero']): ?>
    <?php print render($page["hero"]); ?>
    <?php endif; ?>
    <!--end Hero--> 
  </div>

  <?php if($messages): ?>
    <div id="drupal_messages"><div class="alert-box message"><?php print $messages; ?></div></div>
  <?php endif;?>

  <!-- Region #1 -->
  <div id="r1"></div>
  
  <div id="about" class="page section" style="clear: both;">
    <!--start parallax 1-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region1_image', 'surreal'))): ?>
    <div id="parallax-1" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')">
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region1_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns"> 
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 1--> 
    
    <div class="container aboutContainer">
      <?php if (theme_get_setting('region1Name', 'surreal') || theme_get_setting('region1Description', 'surreal')): ?>
      <div class="sixteen columns">
        <h1><?php print onepage_title(theme_get_setting('region1Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region1Description', 'surreal');?> 
      </div>
      <?php endif; ?>
      <?php if ($page['region1']): ?>
      <?php print render($page["region1"]); ?>
      <?php endif; ?>   
    </div>
  </div>
  <!-- end Region #1 --> 

  <!-- Region #2 -->
  <div id="r2"></div>
  <!--start About -->
  <div id="services" class="page section">
    <!--start parallax 2-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region2_image', 'surreal'))): ?>
    <div id="parallax-2" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')">    
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region2_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns">
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 2--> 
    
    <div class="container servicesContainer">
      <?php if (theme_get_setting('region2Name', 'surreal') || theme_get_setting('region2Description', 'surreal')): ?>
      <div class="sixteen columns">
        <h1><?php print onepage_title(theme_get_setting('region2Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region2Description', 'surreal');?> 
      </div>
      <?php endif; ?>
      <?php if ($page['region2']): ?>
      <?php print render($page["region2"]); ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- end Region #2 --> 

  <!-- Region #3 -->
  <div id="r3"></div>
  <div id="people" class="page section"  style="clear: left;">
    <!--start parallax 3-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region3_image', 'surreal'))): ?>
    <div id="parallax-3" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')"> 
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region3_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns"> 
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 3--> 
    
    <div class="container peopleContainer">
      <?php if (theme_get_setting('region3Name', 'surreal') || theme_get_setting('region3Description', 'surreal')): ?>
      <div class="sixteen columns">
        <h1><?php print onepage_title(theme_get_setting('region3Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region3Description', 'surreal');?> 
      </div>
      <?php endif; ?>
      <div class="space40"></div>
      <?php if ($page['region3']): ?>
      <?php print render($page["region3"]); ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- end Region #3 --> 

  <!-- Region #4 -->
  <div id="r4"></div>
  <div id="portfolio" class="page section"  style="clear: left;">
    <!--start parallax 4-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region4_image', 'surreal'))): ?>
    <div id="parallax-4" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')"> 
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region4_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns"> 
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 4--> 
    
    <?php if (theme_get_setting('region4Name', 'surreal') || theme_get_setting('region4Description', 'surreal')): ?>
    <div class="container portfolioContainer">
      <div class="sixteen columns">
        <h1><?php print onepage_title(theme_get_setting('region4Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region4Description', 'surreal');?> </div>
    </div>
    <?php endif; ?>
    <?php if ($page['region4']): ?>
    <?php print render($page["region4"]); ?>
    <?php endif; ?>
    <div class="space40"></div>
  </div>
  <!-- end Region #4 --> 

  <!-- Region #5 -->
  <div id="r5"></div>
  <div id="careers" class="page section">
    <!--start parallax 5-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region5_image', 'surreal'))): ?>
    <div id="parallax-5" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')">    
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region5_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns">
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 5--> 
    
    <div class="space40"></div>
    <div class="container careersContainer">
      <?php if (theme_get_setting('region5Name', 'surreal') || theme_get_setting('region5Description', 'surreal')): ?>
      <div class="sixteen columns">
        <h1><?php print onepage_title(theme_get_setting('region5Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region5Description', 'surreal');?> 
      </div>
      <?php endif; ?>
      <?php if ($page['region5']): ?>
      <?php print render($page["region5"]); ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- end Region #5 --> 

  <!-- Region #6 -->
  <div id="r6"></div>
  <div id="contact" class="page section">
    <!--start parallax 6-->
    <?php if($file = file_load(theme_get_setting('parallax_bg_region6_image', 'surreal'))): ?>
    <div id="parallax-6" class="parallax fixed" style="background: url('<?php print file_create_url($file->uri); ?>')"> 
      <div class="quoteWrap">
        <div class="quote">
          <div class="container">
            <?php if($file = file_load(theme_get_setting('parallax_fg_region6_image', 'surreal'))): ?>
            <?php $fileinfo = image_get_info(file_create_url($file->uri)); ?>
            <div class="sixteen columns"> 
              <img height="<?php print $fileinfo['height']; ?>" width="<?php print $fileinfo['width']; ?>" class="cutout" src="<?php print file_create_url($file->uri); ?>" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!--end parallax 6--> 
    <div class="space40"></div>
    <div class="container contactContainer">
      <?php if (theme_get_setting('region6Name', 'surreal') || theme_get_setting('region6Description', 'surreal')): ?>
      <div class="sixteen columns">
        <h1><?php print onepage_title_revert(theme_get_setting('region6Name', 'surreal'));?></h1>
        <?php print theme_get_setting('region6Description', 'surreal');?> 
      </div>
      <?php endif; ?>
      <div class="container contactForm">
        <?php if (theme_get_setting('contact-info', 'surreal')): ?>
        <div class="five columns offset-by-one minimo-light uppercase">
          <?php if ($logo): ?>
            <div class="contactLogo"><img height="100" width="186" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></div>
          <?php endif; ?>
          <div class="contactInfo">
            <?php print theme_get_setting('contact-info', 'surreal'); ?>
          </div>
        </div>
        <?php endif; ?>
        <div class="nine columns">
          <div class="five columns contactDetails minimo-light uppercase alpha">
            <ul>
              <li><span class="icon-location"></span><?php print theme_get_setting('contact-map', 'surreal'); ?>
                <br/><span class="icon-spacer"></span><?php print theme_get_setting('contact-map-region', 'surreal'); ?>
                <br/><span class="icon-spacer"></span><?php print theme_get_setting('contact-map-county', 'surreal'); ?>
                <br/><span class="icon-spacer"></span><?php print theme_get_setting('contact-map-area', 'surreal'); ?>
              </li>
            </ul>            
          </div>
          <div class="four columns contactDetails minimo-light uppercase omega">
            <ul>
              <li><span class="icon-phone"></span><?php print theme_get_setting('contact-phone', 'surreal'); ?></li>
              <li><span class="icon-envelop"></span><a href="mailto:<?php print theme_get_setting('contact-email', 'surreal'); ?>"><?php print theme_get_setting('contact-email', 'surreal'); ?></a></li>
            </ul>
          </div> 
          <div class="space20"></div>
        </div>
        <?php if ($page['region6']): ?>
        <?php print render($page["region6"]); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- end Region #6 -->
  <?php else: ?>
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



  <?php endif; ?>

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
</div>
<!--end footer--> 

