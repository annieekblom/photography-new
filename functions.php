<?php

include("include/taxonomies.php");
include("include/post-types.php");
include("include/widget.php");
include("include/theme.php");

?>

<?php

//MEDIA
add_image_size( 'grid_thumbnail', 300, 300, true );
add_image_size( 'single_large', 660, 400, false );
add_theme_support( 'custom-logo' );

//NAV

function register_my_menus() {
  register_nav_menus(
    array(
      'page-menu' => __( 'Page menu' ),
      'social-menu' => __( 'Social' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//REMOVE DEFAULT POST
add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
    remove_menu_page('edit.php');
}
?>
