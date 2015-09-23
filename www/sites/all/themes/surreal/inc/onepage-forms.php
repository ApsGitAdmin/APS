<?php
//One page regions
	$form['IMsettings']['onepage'] = array(
        '#type' => 'fieldset',
        '#title' => t('One page settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
        '#weight' => -3
    );

    // Region 1
    $form['IMsettings']['onepage']['region1'] = array(
        '#type' => 'fieldset',
        '#title' => t('About (region #1)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => '1'
    );
    $form['IMsettings']['onepage']['region1']['region1Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region1Name', 'surreal'),
    );
    $form['IMsettings']['onepage']['region1']['region1Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region1Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['IMsettings']['onepage']['region1']['parallax_fg_region1_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_fg_region1_image', ''),
    );
    $form['IMsettings']['onepage']['region1']['parallax_bg_region1_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_bg_region1_image', ''),
    );

  	// Region 2
    $form['IMsettings']['onepage']['region2'] = array(
        '#type' => 'fieldset',
        '#title' => t('Services (region #2)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => '2'
    );
    $form['IMsettings']['onepage']['region2']['region2Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region2Name', 'surreal'),
    );
    $form['IMsettings']['onepage']['region2']['region2Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region2Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['IMsettings']['onepage']['region2']['parallax_fg_region2_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_fg_region2_image', ''),
    );
    $form['IMsettings']['onepage']['region2']['parallax_bg_region2_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_bg_region2_image', ''),
    );
	
	// Region 3
    $form['IMsettings']['onepage']['region3'] = array(
        '#type' => 'fieldset',
        '#title' => t('Our People (region #3)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => '3'
    );
    $form['IMsettings']['onepage']['region3']['region3Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region3Name', 'surreal'),
    );
    $form['IMsettings']['onepage']['region3']['region3Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region3Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['IMsettings']['onepage']['region3']['parallax_fg_region3_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_fg_region3_image', ''),
    );
    $form['IMsettings']['onepage']['region3']['parallax_bg_region3_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_bg_region3_image', ''),
    );
	
	// Region 4
    $form['IMsettings']['onepage']['region4'] = array(
        '#type' => 'fieldset',
        '#title' => t('Portfolio (region #4)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => '4'
    );
    $form['IMsettings']['onepage']['region4']['region4Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region4Name', 'surreal'),
    );
    $form['IMsettings']['onepage']['region4']['region4Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region4Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['IMsettings']['onepage']['region4']['parallax_fg_region4_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_fg_region4_image', ''),
    );
    $form['IMsettings']['onepage']['region4']['parallax_bg_region4_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_bg_region4_image', ''),
    );
	
	// Region 5
    $form['IMsettings']['onepage']['region5'] = array(
        '#type' => 'fieldset',
        '#title' => t('Contact (region #5)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => '5'
    );
    $form['IMsettings']['onepage']['region5']['region5Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region5Name', 'surreal'),
    );
    $form['IMsettings']['onepage']['region5']['region5Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region5Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['IMsettings']['onepage']['region5']['parallax_fg_region5_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_fg_region5_image', ''),
    );
    $form['IMsettings']['onepage']['region5']['parallax_bg_region5_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => variable_get('parallax_bg_region5_image', ''),
    );
?>