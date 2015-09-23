<?php
//
include_once 'template.php';
function surreal_form_system_theme_settings_alter(&$form, &$form_state) {
    // Work-around for this bug: https://drupal.org/node/1862892
    $theme_settings_path = drupal_get_path('theme', 'surreal') . '/theme-settings.php';
    if (file_exists($theme_settings_path) && !in_array($theme_settings_path, $form_state['build_info']['files'])) {
        $form_state['build_info']['files'][] = $theme_settings_path;
    }

    $form['theme_settings']['#collapsible'] = TRUE;
    $form['theme_settings']['#collapsed'] = TRUE;
    $form['theme_settings']['#weight'] = 10;
    $form['logo']['#collapsible'] = TRUE;
    $form['logo']['#collapsed'] = TRUE;
    $form['logo']['#weight'] = 11;
    $form['favicon']['#collapsible'] = TRUE;
    $form['favicon']['#collapsed'] = TRUE;
    $form['favicon']['#weight'] = 12;

    //Background slider
    $form['banner'] = array(
        '#type' => 'fieldset',
        '#title' => t('Web site background Slideshow'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
        '#weight' => -2
    );

    //BACKGROUND 1
    $form['banner']['images'] = array(
        '#type' => 'fieldset',
        '#title' => t('First slide'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE
    );

    // Image upload section ======================================================
    $banners = surreal_get_banners();
    $form['banner']['images'] = array(
        '#type' => 'vertical_tabs',
        '#title' => t('Banner images'),
        '#weight' => -1,
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
        '#tree' => TRUE
    );
    $i = 0;
    foreach ($banners as $image_data) {
        $form['banner']['images'][$i] = array(
            '#type' => 'fieldset',
            '#title' => t('Image !number: !title', array(
                '!number' => $i + 1,
                '!title' => $image_data['image_title']
            )),
            '#weight' => $i,
            '#collapsible' => TRUE,
            '#collapsed' => FALSE,
            '#tree' => TRUE,
            // Add image config form to $form
            'image' => _surreal_banner_form($image_data)
        );
        $i++;
    }
    $form['banner']['image_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload a new slide'),
        '#weight' => $i
    );

    $form['frontpage'] = array(
        '#type' => 'fieldset',
        '#title' => t('One page settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
        '#weight' => 0
    );

    // Region 1
    $form['frontpage']['region1'] = array(
        '#type' => 'fieldset',
        '#title' => t('About (region #1)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 1
    );
    $form['frontpage']['region1']['region1Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region1Name', 'surreal'),
    );
    $form['frontpage']['region1']['region1Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region1Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region1']['parallax_fg_region1_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region1_image', 'surreal'),
    );
    $form['frontpage']['region1']['parallax_bg_region1_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region1_image', 'surreal'),
    );

    // Region 2
    $form['frontpage']['region2'] = array(
        '#type' => 'fieldset',
        '#title' => t('Services (region #2)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 2
    );
    $form['frontpage']['region2']['region2Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region2Name', 'surreal'),
    );
    $form['frontpage']['region2']['region2Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region2Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region2']['parallax_fg_region2_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region2_image', 'surreal'),
    );
    $form['frontpage']['region2']['parallax_bg_region2_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region2_image', 'surreal'),
    );
    
    // Region 3
    $form['frontpage']['region3'] = array(
        '#type' => 'fieldset',
        '#title' => t('Our People (region #3)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 3
    );
    $form['frontpage']['region3']['region3Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region3Name', 'surreal'),
    );
    $form['frontpage']['region3']['region3Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region3Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region3']['parallax_fg_region3_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region3_image', 'surreal'),
    );
    $form['frontpage']['region3']['parallax_bg_region3_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region3_image', 'surreal'),
    );
    
    // Region 4
    $form['frontpage']['region4'] = array(
        '#type' => 'fieldset',
        '#title' => t('Portfolio (region #4)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 4
    );
    $form['frontpage']['region4']['region4Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region4Name', 'surreal'),
    );
    $form['frontpage']['region4']['region4Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region4Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region4']['parallax_fg_region4_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region4_image', 'surreal'),
    );
    $form['frontpage']['region4']['parallax_bg_region4_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region4_image', 'surreal'),
    );

    // Region 5
    $form['frontpage']['region5'] = array(
        '#type' => 'fieldset',
        '#title' => t('Careers (region #5)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 5
    );
    $form['frontpage']['region5']['region5Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region5Name', 'surreal'),
    );
    $form['frontpage']['region5']['region5Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region5Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region5']['parallax_fg_region5_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region5_image', 'surreal'),
    );
    $form['frontpage']['region5']['parallax_bg_region5_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region5_image', 'surreal'),
    );
    
    // Region 6
    $form['frontpage']['region6'] = array(
        '#type' => 'fieldset',
        '#title' => t('Contact (region #6)'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#weight' => 6
    );
    $form['frontpage']['region6']['region6Name'] = array(
        '#type' => 'textfield',
        '#title' => t("Page title"),
        '#default_value' => theme_get_setting('region6Name', 'surreal'),
    );
    $form['frontpage']['region6']['region6Description'] = array(
        '#type' => 'textarea',
        '#title' => t("Page description"),
        '#default_value' => theme_get_setting('region6Description', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region6']['parallax_fg_region6_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Foreground'),
        '#description' => t('The image should be on a transparent background for proper effect'),
        '#upload_location' => 'public://parallax/foreground/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_fg_region6_image', 'surreal'),
    );
    $form['frontpage']['region6']['parallax_bg_region6_image'] = array(
        '#type' => 'managed_file',
        '#title' => t('Upload Background'),
        '#description' => t('The image should tile horizontally for proper effect'),
        '#upload_location' => 'public://parallax/background/',
        '#progress_indicator' => 'bar',
        '#default_value' => theme_get_setting('parallax_bg_region6_image', 'surreal'),
    );
    $form['frontpage']['region6']['contact-page'] = array(
        '#type' => 'fieldset',
        '#title' => t('Contact Form'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );
    $form['frontpage']['region6']['contact-page']['contact-info'] = array(
        '#type' => 'textarea',
        '#title' => t('Information'),
        '#default_value' => theme_get_setting('contact-info', 'surreal'),
        '#format' => 'full_html', 
    );
    $form['frontpage']['region6']['contact-page']['contact-map'] = array(
        '#type' => 'textfield',
        '#title' => t('Building'),
        '#description' => t('Example: Abney Hall'),
        '#default_value' => theme_get_setting('contact-map', 'surreal')
    );
    $form['frontpage']['region6']['contact-page']['contact-map-region'] = array(
        '#type' => 'textfield',
        '#title' => t('Address 1'),
        '#description' => t('Example: Manchester Rd'),
        '#default_value' => theme_get_setting('contact-map-region', 'surreal')
    );
	$form['frontpage']['region6']['contact-page']['contact-map-county'] = array(
        '#type' => 'textfield',
        '#title' => t('County'),
        '#description' => t('Example: Cheadle'),
        '#default_value' => theme_get_setting('contact-map-county', 'surreal')
    );
    $form['frontpage']['region6']['contact-page']['contact-map-area'] = array(
        '#type' => 'textfield',
        '#title' => t('Postcode'),
        '#description' => t('Example: SK8 2PD'),
        '#default_value' => theme_get_setting('contact-map-area', 'surreal')
    );
    $form['frontpage']['region6']['contact-page']['map'] = array(
        '#title' => t('Contact Map'),
    );
	$form['frontpage']['region6']['contact-page']['contact-map-zoom'] = array(
        '#type' => 'textfield',
        '#title' => t('Zoom map'),
        '#default_value' => theme_get_setting('contact-map-zoom', 'surreal'),
		'#description' => 'Min value: 1, Max value: 20. Default value 10'
    );
 	$form['frontpage']['region6']['contact-page']['contact-map-status'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show map on contact page'),
        '#default_value' => theme_get_setting('contact-map-status', 'surreal')
    );
    $form['frontpage']['region6']['contact-page']['contact-phone'] = array(
        '#type' => 'textfield',
        '#title' => t('Phone'),
        '#default_value' => theme_get_setting('contact-phone', 'surreal')
    );
    $form['frontpage']['region6']['contact-page']['contact-email'] = array(
        '#type' => 'textfield',
        '#title' => t('Email'),
        '#default_value' => theme_get_setting('contact-email', 'surreal')
    );
	
    $form['#submit'][] = 'surreal_settings_submit';
}

/**
* Save settings data.
*/
function surreal_settings_submit(&$form, &$form_state) {
    $settings = array();

    // Region parallax upload
    for ($i = 1; $i <= 6; $i++) {
        $fg = 'parallax_fg_region'.$i.'_image';
        if ($file = file_load($form_state['values'][$fg])) {
            $file->status = FILE_STATUS_PERMANENT;
            file_save($file);
            file_usage_add($file, 'user', 'user', 1);
            variable_set($fg, $file->fid);
        }

        $bg = 'parallax_bg_region'.$i.'_image';
        if ($file = file_load($form_state['values'][$bg])) {
            $file->status = FILE_STATUS_PERMANENT;
            file_save($file);
            file_usage_add($file, 'user', 'user', 1);
            variable_set($bg, $file->fid);
        }
    }

    // Update image field
    foreach ($form_state['input']['images'] as $image) {
        if (is_array($image)) {
            $image = $image['image'];
            if ($image['image_delete']) {
                // Delete banner file
                file_unmanaged_delete($image['image_path']);
                // Delete banner thumbnail file
                file_unmanaged_delete($image['image_thumb']);
            } else {
                // Update image
                $settings[] = $image;
            }
        }
    }
    // Check for a new uploaded file, and use that if available.
    if ($file = file_save_upload('image_upload')) {
        $file->status = FILE_STATUS_PERMANENT;
        if ($image = _surreal_save_image($file)) {
            // Put new image into settings
            $settings[] = $image;
        }
    }
    // Save settings
    surreal_set_banners($settings);
}

/**
* Provide default installation settings for marinelli.
*/
function _surreal_install() {
    // Deafault data
    $file = new stdClass;
    $banners = array();
    // Source base for images
    $src_base_path = drupal_get_path('theme', 'surreal');
    $default_banners = theme_get_setting('default_banners');
    //print_r($default_banners);
    // Put all image as banners
    foreach ($default_banners as $i => $data) {
        $file->uri = $src_base_path . '/' . $data['image_path'];
        $file->filename = $file->uri;
        $banner = _surreal_save_image($file);
        unset($data['image_path']);
        $banner = array_merge($banner, $data);
        $banners[$i] = $banner;
    }
    // Save banner data
    surreal_set_banners($banners);
    // Flag theme is installed
    variable_set('theme_surreal_first_install', FALSE);
}

/**
* Save file uploaded by user and generate setting to save.
*
* @param <string> $image
*    Name of image to retrieve
*
* @return <url>
*    URL of image to print.
*    FALSE on error.
*/
function _surreal_get_parallax_image($image = '') {
    if ($image = '') {
        return FALSE;
    }

    $file = file_load(theme_get_setting($image, 'surreal'));
    return file_create_url($file->uri);
}

/**
* Save file uploaded by user and generate setting to save.
*
* @param <file> $file
*    File uploaded from user
*
* @param <string> $banner_folder
*    Folder where save image
*
* @param <string> $banner_thumb_folder
*    Folder where save image thumbnail
*
* @return <array>
*    Array with file data.
*    FALSE on error.
*/
function _surreal_save_image($file, $banner_folder = 'public://surreal/slide/', $banner_thumb_folder = 'public://surreal/slide/thumb/') {
    // Check directory and create it (if not exist)
    _surreal_check_dir($banner_folder);
    _surreal_check_dir($banner_thumb_folder);
    $parts = pathinfo($file->filename);
    $destination  = $banner_folder . $parts['basename'];
    $setting = array();
    $file->status = FILE_STATUS_PERMANENT;
    // Copy temporary image into banner folder
    if ($img = file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
        // Generate image thumb
        $image = image_load($destination);
        $small_img = image_scale($image, 300, 100);
        $image->source = $banner_thumb_folder . $parts['basename'];
        image_save($image);
        // Set image info
        $setting['image_path'] = $destination;
        $setting['image_thumb'] = $image->source;
        $setting['image_title'] = '';
        $setting['image_weight'] = 0;
        $setting['image_published'] = FALSE;
        return $setting;
    }
    return FALSE;
}

/**
* Check if folder is available or create it.
*
* @param <string> $dir
*    Folder to check
*/
function _surreal_check_dir($dir) {
    // Normalize directory name
    $dir = file_stream_wrapper_uri_normalize($dir);
    // Create directory (if not exist)
    file_prepare_directory($dir, FILE_CREATE_DIRECTORY);
}

/**
* Generate form to mange banner informations
*
* @param <array> $image_data
*    Array with image data
*
* @return <array>
*    Form to manage image informations
*/
function _surreal_banner_form($image_data) {
    $img_form = array();
    // Image preview
    $img_form['image_preview'] = array(
        '#markup' => theme('image', array(
            'path' => $image_data['image_thumb']
        ))
    );
    // Image path
    $img_form['image_path'] = array(
        '#type' => 'hidden',
        '#value' => $image_data['image_path']
    );
    // Thumbnail path
    $img_form['image_thumb'] = array(
        '#type' => 'hidden',
        '#value' => $image_data['image_thumb']
    );
    // Image title
    $img_form['image_title'] = array(
        '#type' => 'textfield',
        '#title' => t('Title'),
        '#default_value' => $image_data['image_title']
    );
    // Image weight
    $img_form['image_weight'] = array(
        '#type' => 'weight',
        '#title' => t('Weight'),
        '#default_value' => $image_data['image_weight']
    );
    // Image is published
    $img_form['image_published'] = array(
        '#type' => 'checkbox',
        '#title' => t('Published'),
        '#default_value' => $image_data['image_published']
    );
    // Delete image
    $img_form['image_delete'] = array(
        '#type' => 'checkbox',
        '#title' => t('Delete image.'),
        '#default_value' => FALSE
    );
    return $img_form;
}

include_once 'inc/parallax-image-validate.php';
