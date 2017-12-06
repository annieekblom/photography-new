<?php
// Register Theme Features--------------------------------------------------
function custom_theme_features()  {

  // Add theme support for Post Formats
  add_theme_support( 'post-formats', array(  ) );

  // Add theme support for Featured Images
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', array(
	'height'      => 200,
	'width'       => 500,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
}
add_action( 'init', 'custom_theme_features', 0 );

?>