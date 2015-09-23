<?php
//
include_once 'template.php';
function aps_form_system_theme_settings_alter(&$form, &$form_state) {
    // Work-around for this bug: https://drupal.org/node/1862892
    $theme_settings_path = drupal_get_path('theme', 'aps') . '/theme-settings.php';
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
}

include_once 'inc/parallax-image-validate.php';
