<?php
/**
 * @file
 * aps Tracking settings form.
 */

/**
 * aps Tracking settings form.
 */
function aps_litebox_settings() {
  $form['aps_litebox_node_types'] = array(
    '#title' => t('Content types'),
    '#type' => 'checkboxes',
    '#description' => t('Select node types you want to activate the litebox content for.'),
    '#default_value' => variable_get('aps_litebox_node_types', array()),
    '#options' => node_type_get_names(),
  );

  return system_settings_form($form);
}