<?php

/**
 * Implements hook_rules_event_info().
 */
function aps_unload_rules_event_info() {
  $events = array(
    'aps_unload_webcast' => array(
      'label' => t('User has finished watching Webcast'),
      'group' => t('Custom aps'),
      'variables' => array(
        'node' => array(
          'type' => 'node',
          'label' => t('Webcast Node'),
        ),
        'user' => array(
          'type' => 'user',
          'label' => t('Viewer'),
        ),
      ),
    ),
    'aps_unload_browser_info' => array(
      'label' => t('Check Browser Info'),
      'group' => t('Custom aps'),
      'variables' => array(
        'browser' => array(
          'type' => 'text',
          'label' => t('Browser Info'),
        ),
      ),
    ),
  );
  return $events;
}

/**
 * Implement hook_rules_action_info().
 */
function aps_unload_rules_action_info() {
  return array(
    'aps_unload_enter_webcast' => array(
      'label' => t('User has begun watching the Webcast'),
      'group' => t('Custom aps'),
      'parameter' => array(
        'node' => array(
          'type' => 'node',
          'label' => t('Webcast Node'),
        ),
        'viewings' => array(
          'type' => 'list',
          'label' => t('Field Collection of Viewings'),
        ),
        'user' => array(
          'type' => 'user',
          'label' => t('Logged in user'),
        ),
      ),
    ),
    'aps_unload_exit_webcast' => array(
      'label' => t('User has exited the Webcast'),
      'group' => t('Custom aps'),
      'parameter' => array(
        'node' => array(
          'type' => 'node',
          'label' => t('Webcast Node'),
        ),
        'viewings' => array(
          'type' => 'list',
          'label' => t('Field Collection of Viewings'),
        ),
        'user' => array(
          'type' => 'user',
          'label' => t('Logged in user'),
        ),
      ),
    ),
  );
}

function aps_unload_enter_webcast($node, $viewings, $user) {
  $user_viewings = array();
  // Create a list of all the viewings that belong to this user
  foreach ($viewings as $k => $fc) {
    if ($fc->field_user[LANGUAGE_NONE][0]['target_id'] == $user->uid) {
      $user_viewings[] = $fc;
    }
  }

  $now = Date('Y-m-d H:i:s');

  // Does this user have any viewings?
  if ($user_viewings) {
    $last = array_pop($user_viewings);
    
    // Is the last viewed time blank?
    if (!$last->field_exit) {
      $last->field_exit = array(
        LANGUAGE_NONE => array(
          array(
            'value' => $now,
            'timezone' => $last->field_enter[LANGUAGE_NONE][0]['timezone'],
            'timezone_db' => $last->field_enter[LANGUAGE_NONE][0]['timezone_db'],
            'date_type' => $last->field_enter[LANGUAGE_NONE][0]['date_type'],
          ),
        ),
      );
      $last->save(TRUE);
    }
  }

  // Create a new record for them
  $field_collection_item = entity_create('field_collection_item', array('field_name' => 'field_viewer_timing'));
  $field_collection_item->setHostEntity('node', $node);
  $field_collection_item->field_user[LANGUAGE_NONE][0] = array('target_id' => $user->uid);
  $field_collection_item->field_enter[LANGUAGE_NONE][0] = array('value' => $now);
  $field_collection_item->save(TRUE);
  field_attach_update('node', $node);
}

function aps_unload_exit_webcast($node, $viewings, $user) {
  $user_viewings = array();
  // Create a list of all the viewings that belong to this user
  foreach ($viewings as $k => $fc) {
    if ($fc->field_user[LANGUAGE_NONE][0]['target_id'] == $user->uid) {
      $user_viewings[] = $fc;
    }
  }

  $now = Date('Y-m-d H:i:s');

  // Does this user have any viewings?
  if ($user_viewings) {
    $last = array_pop($user_viewings);
   
    // Is the last viewed time blank?
    if (!$last->field_exit) {  
      $last->field_exit = array(
        LANGUAGE_NONE => array(
          array(
            'value' => $now,
            'timezone' => $last->field_enter[LANGUAGE_NONE][0]['timezone'],
            'timezone_db' => $last->field_enter[LANGUAGE_NONE][0]['timezone_db'],
            'date_type' => $last->field_enter[LANGUAGE_NONE][0]['date_type'],
          ),
        ),
      );
      $last->save(TRUE);
    }
    field_attach_update('node', $node);
  }
}