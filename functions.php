<?php
/**
 * Theme Functions
 * 
 * @package hoha
 */
  if ( ! defined( 'HOHA_DIR_PATH' ) ) {
    define( 'HOHA_DIR_PATH', untrailingslashit( get_template_directory() ) );
  }

  if(!defined('HOHA_DIR_URI')){
    define( 'HOHA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
  }

  require_once HOHA_DIR_PATH . '/inc/helpers/autoloader.php';


  function hoha_get_theme_instance(){
    \HOHA\Inc\HOHA_THEME::get_instance();
  }
  hoha_get_theme_instance();
