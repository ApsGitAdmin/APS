<div id="top"></div>
<?php if(drupal_is_front_page()): ?>
<nav>
  <div class="container">
    <div class="sixteen columns">
      <div id="nav" class="menuContainer"> 
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="logoContainer"> <img src="<?php print $logo; ?>" class="logo" width="186" height="100" alt="<?php print t('Home'); ?>" /> </a>
        <?php endif; ?>
        <?php if (module_exists('i18n_menu')) {
              $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
              $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            }
            print drupal_render($main_menu_tree);
          ?>
      </div>    
    </div>
  </div>
</nav>
<div id="page">  
  <div id="homepage" class="homepage section">
    <div id="r0"> 
      <div class="container"> 
        <!-- Region Hero -->  
        <?php if ($page['hero']): ?>
        <?php //print render($page["hero"]); ?>
        <?php endif; ?>
        <!--end Hero-->
        <div class="aps-video-wrapper">        
          <!--<iframe src="https://player.vimeo.com/video/246274334?autoplay=0&loop=0&autopause=0" class="aps-video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->    
          <img class="posterFrame" src="sites/all/themes/surreal/images/apsThumbnail-MAIN.jpg" />
          <iframe src="https://player.vimeo.com/video/115250224?autoplay=0&loop=0&autopause=0&api=1" class="aps-video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div> 
      </div>
    </div>
  </div>




  <!--<div id="virtual-meeting"><a href="https://vimeo.com/155992387" rel="prettyPhoto"><img src="<?php global $base_path; print $base_path . drupal_get_path('theme', 'surreal'); ?>/images/video-popup.png" /></a></div>-->

  <?php if($messages): ?>
    <!--<div id="drupal_messages"><div class="alert-box message"><?php print $messages; ?></div></div>-->
  <?php endif;?>

  <!-- Region #1 -->
  <div id="r1">
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
  </div>
  <!-- end Region #1 --> 

  <!-- Region #2 -->
  <div id="r2">
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
  </div>
  <!-- end Region #2 --> 

  <!-- Region #3 -->
  <div id="r3">
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
  </div>
  <!-- end Region #3 --> 


  <!-- Region #4 
  <div id="r4"></div>
  <div id="portfolio" class="page section"  style="clear: left;">
    start parallax 4
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
    end parallax 4
    
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
  end Region #4 --> 


  <!-- Region #5 -->
  <div id="r5">
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
  </div>
  <!-- end Region #5 --> 

  <!-- Region #6 -->
  <div id="r6">
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
  </div>
  <!-- end Region #6 -->
  <?php else: ?>
  <!-- Start Navigation -->
  <nav>
    <div class="container">
      <div class="sixteen columns">
        <div id="nav" class="menuContainer"> 
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="logoContainer"> <img src="<?php print $logo; ?>" class="logo" width="186" height="100" alt="<?php print t('Home'); ?>" /> </a>
          <?php endif; ?>
          <?php if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              print drupal_render($main_menu_tree);
            ?>
        </div>    
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
      <div class="sixteen columns privacy-policy"><a href="#privacy-policy" class="magnific-inline">Click here to view our privacy policy</a></div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--end footer--> 
  
<div id="privacy-policy" class="white-popup mfp-hide">
  <h3>Accepting the Privacy Policy</h3>
  <p>By consenting to this privacy notice, you are confirming that you have read and understood this policy, including how and why we use your information.</p>
  <p><strong>aps Events and Media</strong> in acting as a data controller / processor is committed to protecting and respecting your privacy. We value the trust you place in us by providing the personal information we need to provide our services.</p>
  <p>The statement below details when and why we collect personal information, how we use it, the conditions under which we may disclose it to others and how we keep it secure.</p>
  <p>Personal information is any information that can be used to identify you, or that which we can link to you.</p>
  <p>We may change this policy from time to time to reflect updated regulations, so please check this page regularly. By using this website, you are agreeing to abide by this policy.</p>
  <h3>Who are we?</h3>
  <p><strong>aps Events and Media</strong> is a Cheshire based events production company, specialising in corporate communications pre, during and post event through live event delivery and digital media solutions.</p>
  <p>We are a company limited by guarantee (No 07374253). Our registered address is Abney Hall, Manchester Road, Cheadle, Cheshire, SK8 2PD</p>
  <h3>What information do we collect and why?</h3>
  <p>The personal information we collect you provide voluntarily. We process this personal information to allow us to enter into an agreement to provide you with our services.</p>
  <p>A summary of the information we collect and why is listed below.</p>
  <h3>In providing you with our services we may collect:</h3>
  <ul>
    <li>Contact Details – Your name, address, phone numbers, email address</li>
    <li>Images and audio - recorded at or used in support of events</li>
    <li>Business information – Business address, phone numbers, email address, registration number, VAT number</li>
  </ul>
  <h3>Why do we collect this information?</h3>
  <p>We are committed to ensuring that the information we collect and use is appropriate for this purpose, and does not constitute an invasion of your privacy.</p>
  <p>In order to provide clients with information and quotes for our services, we make use of your contact information such as name, address, phone number and email to engage in correspondence. We will also correspond with you from time to time to inform you of changes or improvements to services.</p>
  <p>In the course of providing clients with day to day event management and services we also make use of contact details such as name and email address to allow attendees to participate in events. We process this information to allow attendees to create logons and passwords to enter, view and interact with events, for example by asking questions.</p>
  <p>We do collect some personal information automatically from you when you visit this website and our event websites, using cookies and google analytics. Please refer to our cookie policy for further details. In using this technology, we may therefore collect details about the type of device you use to access our website, its operating system and version, your IP address, your general geographic location, your browser and the webpages / content you view.</p>
  <p>The information that we collect automatically is used to protect our websites and improve them.</p>
  <p>We use data collected from attendees and events to provide reports and analysis to our clients about their events.</p>
  <p>We also use your business details for the purposes of invoicing.</p>
  <p>Our office entrances and car park are monitored by CCTV cameras which record continuously.</p>
  <p>If an incident that requires specific recordings to be reviewed for use as evidence of an incident or to assist with an investigation, <strong>aps Events and Media</strong> will liaise with the property management company, who own, operate and manage the CCTV function.</p>
  <p>If the investigation becomes a legal matter, recordings may be submitted as evidence and retained as part of the collateral for that case by the justice system.</p>
  <p>We will endeavour to keep your information accurate, up to date and not keep it for longer than is necessary.</p>
  <p>Visitors to our offices have their name and car registration recorded in our log book for the purposes of health and safety.</p>
  <h3>Will <strong>aps Events and Media</strong> share my personal data with anyone else?</h3>
  <p>We may pass your personal data to third-party service providers contracted to <strong>aps Events and Media</strong>. This is strictly for the purposes of providing services to you or improving them.</p>
  <p>We will not sell or rent your information to third parties.</p>
  <p>We will not share your information with third parties for marketing purposes.</p>
  <p>Any third parties that we may share your data with are obliged to keep your details securely, and to use them only to fulfil the service they provide to you on our behalf.</p>
  <p>If we wish to pass your sensitive personal data onto a third party we will only do so once we have obtained your consent, unless we are legally required to do otherwise.</p>
  <p>A list of the third-party service providers is available upon request, please contact <a href="mailto:gdpr@thinkaps.com">gdpr@thinkaps.com</a></p>
  <h3>Transferring your data outside the EU</h3>
  <p>The data that we collect from you may be transferred to, and stored at, a destination outside the European Economic Area ("EEA") to third-party suppliers, delegates or agents. We’ll take all reasonably necessary steps to make sure that your data is treated securely and in accordance with this privacy policy.</p>
  <p>We’ll only transfer your data to a recipient outside the EEA where we’re permitted to do so by law - for instance, (A) where the transfer is based on standard data protection clauses adopted or approved by the European Commission, (B) where the transfer is to a territory that is deemed adequate by the European Commission, or (C) where the recipient is subject to an approved certification mechanism and the personal information is subject to appropriate safeguards.</p>
  <h3>The legal bases for using your personal information</h3>
  <p>There are different legal bases that we rely on to process your personal information, these are:</p>
  <ul>
    <li>Performance of a contract to clients to provide services – We undertake processing necessary to meet our contractual obligations to clients as the lawful basis for processing personal data.</li>
    <li>Legal Obligation – We undertake processing necessary to meet our legal obligations as a data controller as the lawful basis for processing your personal data. In particular, our obligations to HMRC.</li>
    <li>Consent – when appropriate we will use consent as our legal basis for processing data. For example in relation to attending events or choosing to receive marketing.</li>
  </ul>
  <h3>How long do we hold your data for?</h3>
  <p><strong>aps Events and Media</strong> will process (collect, store and use) the information you provide in a manner compatible with the EU’s General Data Protection Regulation (GDPR). We will endeavour to keep your information accurate and up to date, and not keep it for longer than is necessary.</p>
  <p>We will only hold your personal information for as long as is necessary to provide you with our services. We also retain data so as to meet our legal obligations to regulatory bodies such as HMRC.</p>
  <p>All personal data we hold is subject to this privacy notice and our internal data retention policy. If you have a question about a specific retention period for certain types of personal information we process about you, please send an email to <a href="mailto:gdpr@thinkaps.com">gdpr@thinkaps.com</a></p>
  <h3>Security</h3>
  <p><strong>aps Events and Media</strong> is committed to protecting the personal information you entrust to us.</p>
  <p>While we take reasonable precautions to guard the personal information we collect, no system is impenetrable.</p>
  <p>Unfortunately, sending information via e-mail is not completely secure; anything you send is done so at your own risk. Once received, we will secure your information in accordance with our security procedures and controls.</p>
  <p><strong>aps Events and Media</strong> takes measures to prevent information about you being subject to loss, theft, misuse, unauthorised access, disclosure, alteration and destruction. For example, we store the personal data you provide to us on computer systems that have limited access and are located in controlled facilities.</p>
  <p>We also ensure that our third-party suppliers provide adequate security measures.</p>
  <h3>Your rights</h3>
  <p><strong>aps Events and Media</strong> wants you to be in control of how your personal data is used by us, you can do this by exercising the rights granted to you under the GDPR.</p>
  <ul>
    <li>Right of access – you have the right to request a copy of the information that we hold about you.</li>
    <li>Right of rectification – you have a right to correct data that we hold about you that is inaccurate or incomplete. We rely on you to ensure that your personal information is complete, accurate and up to date. Please inform us promptly of any changes to or inaccuracies in your personal information by contacting <a href="mailto:gdpr@thinkaps.com">gdpr@thinkaps.com</a></li>
    <li>Right to be forgotten – in certain circumstances you can ask for the data we hold about you to be erased from our records.</li>
    <li>Right to restriction of processing – where certain conditions apply you have a right to restrict the processing.</li>
    <li>Right of portability – you have the right to have the data we hold about you transferred to another organisation. Please address such requests to <a href="mailto:gdpr@thinkaps.com">gdpr@thinkaps.com</a> and we will be happy to work with you to provide this information in a machine-readable format and/or soft copies where applicable.</li>
    <li>Right to object – you have the right to object to certain types of processing such as direct marketing.</li>
    <li>Right to object to automated processing - including profiling.</li>
    <li>Right to judicial review - in the event that <strong>aps Events and Media</strong> refuses your request under rights of access, we will provide you with a reason as to why. You have the right to complain as outlined below.</li>
  </ul>
  <p><strong>aps Events and Media</strong> wishes to be as open as it can be in terms of giving people access to their personal data. Individuals can find out if we hold any personal information by making a ‘subject access request’ in doing so, you can request the following information:</p>
  <ul>
    <li>The purpose of the processing we undertake as well as the legal basis for doing so.</li>
    <li>The categories of personal data collected, stored and processed.</li>
    <li>Recipient(s) that the data will be disclosed to.</li>
    <li>If we intend to transfer the personal data to a third party or international organisation, information about how we ensure this is done securely and in line with GDPR requirements.</li>
    <li>How long the data we hold on you will be stored.</li>
    <li>Details of your rights to correct, erase, restrict or object to such processing.</li>
    <li>Information about your right to withdraw consent at any time (if applicable).</li>
    <li>How to lodge a complaint with the supervisory authority.</li>
    <li>Whether the provision of personal data is a statutory or contractual requirement, or a requirement necessary to enter into a contract, as well as whether you are obliged to provide the personal data and the possible consequences of failing to provide such data.</li>
    <li>The source of personal data if it wasn’t collected directly from you.</li>
    <li>Any details and information of automated decision making, such as profiling, and any meaningful information about the logic involved, as well as the significance and expected consequences of such processing.</li>
  </ul>
  <h3>What forms of ID will I need to provide in order to access this?</h3>
  <p><strong>aps Events and Media</strong> accepts the following forms of ID when information on your personal data is requested:</p>
  <p>Passport or Driving Licence</p>
  <h3>How do I make a ‘Subject Access Request’?</h3>
  <p>Please send an email to <a href="mailto:gdpr@thinkaps.com">gdpr@thinkaps.com</a> our team will provide you with a subject access request form and facilitate the request. We will respond to your request as soon as possible and within 30 days of your request form being formally submitted.</p>
  <h3>Job applicants</h3>
  <p><strong>aps Events and Media</strong> is the data controller for the information you provide during the job application process unless otherwise stated. If you have any queries about our job application process please contact samantha.duffy@thinkaps.com</p>
  <p>All of the information you provide during the process will only be used to progress your application, or to fulfil legal or regulatory requirements.</p>
  <p>We will use your contact details to contact you to progress your application. We will use the other information you provide to assess your suitability for the role you have applied for.</p>
  <p>You don’t have to share with us the personal data what we ask for, but it might affect your application if you don’t.</p>
  <h4>The legal bases for using your personal information</h4>
  <ul>
    <li>Performance of a contract to you as a potential employee – Processing as deemed necessary to enter into a contract of employment.</li>
  </ul>
  <h4>Who do we share your data with?</h4>
  <p>
    In order to process and manage applications we use a platform called workable, the personal details you supply will be shared with this supplier. Their privacy policy can be viewed <a href="https://www.workable.com/privacy" target="_blank">here</a>
  </p>
  <h4>Application stage</h4>
  <p>If you apply directly to us by email or post, this information will be processed by <strong>aps Events and Media</strong>. If you have applied via a recruitment agency or job website your details will be processed by this third party and they will act as the data controller.</p>
  <p>We ask you for your personal details including name and contact details. We will also ask you about your previous experience, education, and for answers to questions relevant to the role you have applied for.</p>
  <h4><strong>aps Events and Media</strong> shortlist applications for interview</h4>
  <p>If you are unsuccessful following in your application, we will retain your details for a period of 1 year.</p>
  <h4>Job offer</h4>
  <p>If we make a conditional offer of employment we will ask you for some information so that we can carry out background checks. You must successfully complete these checks prior to employment. By law we are required to confirm the identity of our staff, their right to work in the United Kingdom. We will also confirm the details they have provided with regards to previous employment.</p>
  <p>You will therefore be required to provide:</p>
  <ul>
  <li>Proof of your identity – you will be asked to provide a copy of your passport or other suitable right to work documents as outlined <a href="https://www.gov.uk/government/publications/acceptable-right-to-work-documents-an-employers-guide" target="_blank">here</a></li>
  </ul>
  <p>You will be asked to complete a criminal records declaration to declare any unspent convictions.</p>
  <p>We will contact your referees, using the details you provide in your application, directly to obtain references.</p>
  <h3>Should you have a complaint</h3>
  <p><strong>aps Events and Media</strong> is committed to working with you to reach a fair resolution of any complaint or concern you may have about our use of your personal information. Please contact us in the first instance to discuss your concerns.</p>
  <p>If you believe that we have not been able to assist with your complaint, you may have the right to file a complaint with the Information Commission.</p>
  <p>The details for each of these contacts are:</p>
  <table class="privacy-policy-table">
    <thead>
      <tr>
        <th>&nbsp;</th>
        <th><strong>aps Events and Media</strong> complaints contact details</th>
        <th>Information Commission contact details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Contact Name:</td>
        <td>Samantha Duffy</td>
        <td>Information Commissioners Office</td>
      </tr>
      <tr>
        <td>Address line 1:</td>
        <td><strong>aps Events and Media</strong> Abney Hall, Manchester Road</td>
        <td>Wycliffe House, Water Lane</td>
      </tr>
      <tr>
        <td>Address line 2:</td>
        <td>Cheadle, Cheshire</td>
        <td>Wilmslow, Cheshire</td>
      </tr>
      <tr>
        <td>Address line 3:</td>
        <td>SK8 2PD</td>
        <td>SK9 5AF</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>Samantha Duffy<br /><a href="mailto:samantha.duffy@thinkaps.com">Samantha.duffy@thinkaps.com</a></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <h3>Use of 'cookies'</h3>
  <p>Like many other websites, the <strong>aps Events and Media</strong> website uses cookies. 'Cookies' are small pieces of information sent by an organisation to your computer and stored on your hard drive to allow that website to recognise you when you visit. This helps us to improve our website and deliver a better, more personalised service. We may therefore collect details about the type of device you use to access our website, its operating system and version, your IP address, your general geographic location, your browser and the webpages / content you view.</p>
  <p>It is possible to switch off cookies by setting your browser preferences. Turning cookies off may result in a loss of functionality when using our website. Please refer to the following guides below if you wish to disable cookies.</p>
  <p><a href="https://www.allaboutcookies.org/manage-cookies" target="_blank">https://www.allaboutcookies.org/manage-cookies</a></p>
  <h3>Links to other websites</h3>
  <p>Our website may contain links to other websites run by other organisations. This privacy policy applies only to our website‚ so we encourage you to read the privacy statements on the other websites you visit. We cannot be responsible for the privacy policies and practices of other sites even if you access them using links from our website.</p>
  <p>In addition, if you linked to our website from a third-party site, we cannot be responsible for the privacy policies and practices of the owners and operators of that third-party site and recommend that you check the policy of that third-party site.</p>
  <h3>Review of this Policy</h3>
  <p>We keep this Policy under regular review so please check often for changes. This Policy was last updated in May 2018.</p>
</div>
<?php if (drupal_is_front_page()): ?>
<div id="alert-popup" class="white-popup mfp-hide">
    <h1 class="minimo-bold" style="color: #f9b233">
        <span class="views-label views-label-title minimo-light uppercase">Think</span> Virtual Events
    </h1>
    <p>We’ve been working harder than ever to ensure our clients can engage and interact with their delegates globally, without the need to travel.</p>
    <p><a href="#services" class="mfp-close" type="button">Why not take a look here…</a></p>
</div>
<?php endif; ?>