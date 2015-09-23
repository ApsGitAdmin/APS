<?php

/**
 * @file
 * Configuration settings for Mediasite.
 */
 
/**
 * Returns a form definition for the admin settings page.
 */
function mediasite_admin_settings_form($form_state) {
  $form['mediasite_server_root'] = array(
    '#type' => 'textfield',
    '#title' => t('Mediasite Server Root'),
    '#default_value' => variable_get('mediasite_server_root', ''),
    '#maxlength' => 255,
    '#description' => t('The URL of the mediasite root'),
  );
  
  $form['mediasite_services_api_location'] = array(
    '#type' => 'textfield',
    '#title' => t('Mediasite Services/API Location'),
    '#default_value' => variable_get('mediasite_services_api_location', ''),
    '#maxlength' => 255,
    '#description' => t('The URL of the services/api location.'),
    '#required' => TRUE,
  );
  
  $form['mediasite_ticket_lifetime'] = array(
    '#type' => 'textfield',
    '#title' => t('Ticket Lifetime'),
    '#default_value' => variable_get('mediasite_ticket_lifetime', 30),
    '#field_suffix' => ' minutes',
    '#maxlength' => 255,
    '#description' => t('How long to keep a ticket'),
    '#size' => 8,
  );
  
  $form['mediasite_default_viewer'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Viewer'),
    '#default_value' => variable_get('mediasite_default_viewer', ''),
    '#maxlength' => 255,
    '#description' => t('Mediasite Viewer ID to use if no viewerid specified'),
  );
  
  $form['mediasite_default_width'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Width'),
    '#default_value' => variable_get('mediasite_default_width', 985),
    '#maxlength' => 255,
    '#description' => t('Mediasite Width to use if no width specified'),
    '#size' => 8,
  );
  
  $form['mediasite_default_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Height'),
    '#default_value' => variable_get('mediasite_default_height', 585),
    '#maxlength' => 255,
    '#description' => t('Mediasite Height to use if no height specified'),
    '#size' => 8,
  );
  
  $form['mediasite_user'] = array(
    '#type' => 'textfield',
    '#title' => t('Mediasite User Name'),
    '#default_value' => variable_get('mediasite_user', ''),
    '#maxlength' => 255,
    '#description' => t('The admin user for mediasite'),
    '#required' => TRUE,
  );
  
  $form['mediasite_password'] = array(
    '#type' => 'password',
    '#title' => t('Mediasite Password'),
    '#default_value' => '',
    '#maxlength' => 255,
    '#description' => t('The admin password for mediasite'),
    '#required' => TRUE,
  );
  
  $form['#validate'][] = 'mediasite_admin_settings_form_validate';
  $form['#submit'][] = 'mediasite_admin_settings_form_submit';

  return system_settings_form($form);
}

function mediasite_admin_settings_form_validate($form, &$form_state) {
  $values = $form_state['values'];

  try {
    mediasite_soap_connection($values['mediasite_services_api_location']);
  } catch (SoapFault $exception) {
    form_set_error('mediasite_services_api_location', t('Cannot connect to this URL'));
  }
}

function mediasite_admin_settings_form_submit($form, &$form_state) {
  $values = $form_state['values'];

  foreach ($values as $name => $value) {
    if (strpos($name, 'mediasite_') !== FALSE) {
      variable_set($name, $value);
    }
  }
}