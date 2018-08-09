<?php
/**
 * @file
 * Adds configuration options for the Vimeo Froogaloop Javascript file
 */

function aps_vimeocdn_settings() {
  $form['aps_vimeocdn'] = array(
    '#type' => 'radios',
    '#title' => t('Froogaloop javascript location'),
    '#default_value' => variable_get('aps_vimeocdn', 'default'),
    '#options' => array(
      'default' => t('Use default Froogaloop location - <em>!default_location</em>', array('!default_location' => APS_VIMEOCDN_DEFAULT)),
      'path' => t('Specify a new location'),
      'provided' => t('Use the existing provided version - <em>6 June 2018</em>'),
      'insert' => t('Provide a version of the javascript to use'),
    ),
  );
  $form['aps_vimeocdn_path'] = array(
    '#type' => 'textfield', 
    '#title' => t('Froogaloop javascript location'), 
    '#default_value' => variable_get('aps_vimeocdn_path', ''), 
    '#size' => 60, 
    '#states' => array(
      'visible' => array(
        ':input[name="aps_vimeocdn"]' => array('value' => 'path'),
      ),
    ),
  );
  $form['aps_vimeocdn_insert'] = array(
    '#type' => 'textarea',
    '#title' => t('Insert'),
    '#default_value' => variable_get('aps_vimeocdn_insert', ''), 
    '#maxlength' => 9999, 
    '#rows' => 16,
    '#states' => array(
      'visible' => array(
        ':input[name="aps_vimeocdn"]' => array('value' => 'insert'),
      ),
    ),
  );

  $form['#validate'][] = 'aps_vimeocdn_settings_validate';
  $form['#submit'][] = 'aps_vimeocdn_settings_submit';

  drupal_add_css(drupal_get_path('module', 'aps_vimeochapter') . '/css/admin.css', array('weight' => CSS_THEME));

  return system_settings_form($form);
}

/**
 * Form validate handler.
 */
function aps_vimeocdn_settings_validate($form, &$form_state) {
  $cdn_choice = $form_state['values']['aps_vimeocdn'];

  if ($cdn_choice == 'path') {
    $response = get_headers($form_state['values']['aps_vimeocdn_path']);
    if (!stripos($response[0], '200 OK')) {
      form_set_error('aps_vimeocdn_path', t('File could not be found at this address'));
    }
  } elseif ($cdn_choice == 'insert') {
    
  }
}

/**
 * Form submit handler.
 */
function aps_vimeocdn_settings_submit($form, &$form_state) {
  $values = $form_state['values'];
  if ($values['aps_vimeocdn'] == 'default') {
    variable_set('aps_vimeocdn_location', APS_VIMEOCDN_DEFAULT);
  } elseif ($values['aps_vimeocdn'] == 'path') {
    variable_set('aps_vimeocdn_path', $values['aps_vimeocdn_path']);
    variable_set('aps_vimeocdn_location', $values['aps_vimeocdn_path']);
  } elseif ($values['aps_vimeocdn' == 'provided']) {
    variable_set('aps_vimeocdn_location', APS_VIMEOCDN_PROVIDED);
  } else {
    variable_set('aps_vimeocdn_insert', $values['aps_vimeocdn_insert']);
    variable_set('aps_vimeocdn_location', $values['aps_vimeocdn_insert']);
    variable_set('aps_vimeocdn_inline', 'inline');
  }

  variable_set('aps_vimeocdn', $values['aps_vimeocdn']);
}