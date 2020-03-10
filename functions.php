<?php
// Enable theme settings and show it in GraphQL
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
      'redirect'		=> false,
    'show_in_graphql' => true,
  ));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
// Register the three standard menus in Gatsby Starter
function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary' ),
        'social' => __( 'Social' ),
        'footer' => __( 'Footer' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );
// Enable featured images
add_theme_support( 'post-thumbnails' );
// Turn of image scaling
add_filter( 'big_image_size_threshold', '__return_false' );

?>