<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => true,
  'framework_title' => 'Codestar Framework <small>by Coderjibon</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header',
  'title'       => 'header',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field

    array(
      'id'      => 'logo',
      'type'    => 'image',
      'title'   => 'Brand Logo',
    ),


    

  ), // end: fields
);




CSFramework::instance( $settings, $options );
