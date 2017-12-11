<?php

//WIDGETS

function add_widgets() {
  $args = array(
    'id'            => 'widget',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Widget' ),
    /** Visible description in the Admin Dashboard Widget page */

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section class="widget-section">',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );
 }
 add_action( 'widgets_init', 'add_widgets' );



function add_contact_widget() {
  register_sidebar( array(
    'name'          => __( 'Contact Widget', 'contact_page' ),
    'id'            => 'contact_page',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
    'before_widget' => '<aside id="contact-page-widget" class="widgetcontact">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( 'contact_form', $args );
}
add_action( 'widgets_init', 'add_contact_widget' );



function add_gallery() {
  register_sidebar( array(
    'name'          => __( 'Widget Gallery', 'gallery' ),
    'id'            => 'gallery',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
    'before_widget' => '<aside id="frontpage-widget" class="widgetPhoto">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( 'gallery', $args );
}
add_action( 'widgets_init', 'add_gallery' );


?>