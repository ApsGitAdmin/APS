<?php
/**
 * @file
 * Views plugins declaration for the Collage Formatter module.
 */

/**
 * Implements hook_views_plugins().
 */
function aps_collageformatter_views_plugins() {
  return array(
    'style' => array(
      'aps_collage' => array(
        'title' => t('aps Collage'),
        'handler' => 'aps_collageformatter_plugin_style_collage',
        //'path' => drupal_get_path('module', 'collageformatter') . '/views',
        'uses options' => TRUE,
        //'help' => t(''),
        //'theme' => '',
        //'js' => array(),
        'type' => 'normal',
        'uses row plugin' => FALSE,
        'uses row class' => FALSE,
        'uses fields' => TRUE,
        'uses grouping' => FALSE,
        'even empty' => FALSE,
      ),
    ),
  );
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function aps_collageformatter_form_views_ui_edit_display_form_alter(&$form, &$form_state) {
  if (!empty($form['options']['style_options']['#aps_collageformatter'])) {
    $form['buttons']['flush'] = array(
      '#type' => 'submit',
      '#value' => t('Flush generated images'),
      '#submit' => array('collageformatter_flush_style_submit'),
    );
  }
}
