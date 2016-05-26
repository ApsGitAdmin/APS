<?php
/**
 * @file
 * Views hooks for aps_matrix feature
 */

/**
 * Implements hook_views_plugins().
 */
function aps_matrix_views_plugins() {
  return array(
    'module' => 'aps_matrix',
    'style' => array(
      'aps_matrix_grid' => array(
        'title' => t('aps Matrix'),
        'help' => t('Display view as a table with room columns and time slot rows'),
        'handler' => 'aps_matrix_views_plugin_style_schedule',
        'theme' => 'aps_matrix_grid',
        'uses row plugin' => FALSE,
        'uses row class' => FALSE,
        'uses fields' => TRUE,
        'uses options' => TRUE,
        'uses grouping' => TRUE,
        'use ajax' => FALSE,
        'type' => 'normal',
        'even empty' => TRUE, // Make the View render when there are no results.
        ),
      ),
    );
}
