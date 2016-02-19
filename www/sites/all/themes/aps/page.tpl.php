<div id="top"></div>
<?php if ($page['header']): ?>
<!-- Start Menu -->
<nav>
  <!-- Start Nav Menu -->
  <div class="container">
    <div class="title clearfix">
      <!-- logo & slogan -->
      <div class="three columns alpha">
        <?php $theme = drupal_get_path('theme', 'aps'); $svg = $theme . '/images/logo.svg'; ?>
        <object class="header aps-logo" type="image/svg+xml" data="<?php print base_path() . $svg; ?>"></object>
      </div>
      <!-- End logo & slogan --> 
      <div class="hidden-phone thirteen columns omega">
        <?php print render($page["header"]); ?>
      </div>
    </div>
  </div>
  <!-- End Nav Menu --> 
</nav>
<!-- End Menu --> 
<?php endif; ?>

<div id="page" class="page">
  <div class="section">
    <div id="r0"></div>
  </div>

  <?php if($page['client_parallax']): ?>
    <!--start parallax -->
      <?php print render($page["client_parallax"]); ?>
    <!--end parallax --> 
  <?php endif; ?>

  <!-- Content Page -->
  <div class="container">
    <?php if($messages): ?>
      <div id="drupal_messages"><div class="alert-box message"><?php print $messages; ?></div></div>
    <?php endif;?>
  </div>

  <?php print render($page['content']); ?>
  <!-- End of Content Page -->

  <!-- Return to aps -->
  <div class="space40"></div>
    <div class="container">
      <div class="sixteen columns">
        <div class="return">
          <a href="<?php print $front_page; ?>" title="<?php print t('Return to aps Website'); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'aps') . '/css/images/aps-return.png'; ?>" alt="<?php print t('Return to aps Website'); ?>" /></a>
        </div> 
      </div>
    </div>
  <!-- End of Return -->

  <!-- Contact Info -->
  <div class="space40"></div>
  <div class="container contactContainer">
    <div class="container contactForm">
      <?php if (theme_get_setting('contact-info', 'surreal')): ?>
      <div class="five columns offset-by-one minimo-light uppercase">
        <div class="contactLogo">
          <?php $theme = drupal_get_path('theme', 'aps'); $svg = $theme . '/images/logo.svg'; ?>
          <object class="aps-logo" type="image/svg+xml" data="<?php print base_path() . $svg; ?>"></object>
        </div>
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
    </div>
  </div>
</div>
<!-- End of Contact -->

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

