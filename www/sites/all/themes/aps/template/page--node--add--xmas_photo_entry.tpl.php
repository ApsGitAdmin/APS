<div id="top"></div>
<?php if ($page['header']): ?>
<!-- Start Menu -->
<nav>
  <table class="header container" cellpadding="0" cellspacing="0">
    <tr>
    <!-- Start aps Logo -->
      <td class="aps">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('aps'); ?>"><img src="<?php print $aps_client_logo; ?>" alt="<?php print t('aps'); ?>" /></a>
        <?php endif; ?>
      </td>
    <!-- End aps Logo --> 

    <!-- Start Nav Menu -->
    <td class="title">
      <div class="hidden-phone">
        <?php print render($page["header"]); ?>
      </div>
    </td>
    <!-- End Nav Menu --> 

    <!-- Start Branding -->
    <td class="branding">
      <?php if ($page['branding']): ?>
        <?php print render($page["branding"]); ?>
      <?php endif; ?>
    </td>
    <!-- End Branding --> 
    </tr>
  </table>
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

    <div id="xmas-frame">
      <img src="<?php global $base_path; print $base_path . drupal_get_path('theme', 'aps'); ?>/images/Frame-BG.png" />
      <?php print render($page['content']); ?>
    </div>
       
  </div>
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

