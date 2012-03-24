<?php
/**
 * @file
 * Contains theme override functions and process & preprocess functions for Bootstrap.
 */

// Add your own template_preprocess hooks here

/**
 * Implements template_preprocess_maintenance_page().
 */
function bootstrap_preprocess_maintenance_page(&$vars) {
  drupal_add_css(drupal_get_path('theme', 'bootstrap') . '/css/bootstrap-maintenance.css', array('group' => CSS_THEME));
}

/**
 * Implements template_preprocess_html().
 */
function bootstrap_preprocess_html(&$vars) {
  // Add CSS files for Internet Explorer-specific styles.
  drupal_add_css(path_to_theme() . '/css/ie/bootstrap-ielt9.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'media' => 'screen', 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie/bootstrap-ielt8.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'media' => 'screen', 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/wireframe-override.css', array('group' => CSS_THEME, 'every_page' => TRUE, 'media' => 'screen', 'preprocess' => FALSE));
  
  /* Add your own custom logic in between the following lines:
	--------------------------------------------------------------------*/







  /* STOP!!!! Don't edit this function below this line!
	--------------------------------------------------------------------*/

  // The below code comments are placeholders for Zentropy optional components downloaded and installed via Drush.
  // For more information see the section "Advanced Drush Integration" in Zentropy's README.txt or the project page on drupal.org: http://drupal.org/project/zentropy
  
  // IMPORTANT: DO NOT EDIT OR REMOVE THE LINES BELOW!!!
  
  drupal_add_js('sites/all/themes/bootstrap/js/modernizr.js', array('scope' => 'header', 'weight' => -20, 'group' => JS_LIBRARY, 'every_page' => TRUE));

  #selectivizr#

  #coolinput#
  
  #respond#
  
  #css3mq#
  
  #easing#
  
  #hoverintent#
  
  #bgiframe#
}