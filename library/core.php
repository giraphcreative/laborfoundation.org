<?php


// include the main.js script in the header on the front-end.
function p_scripts() {
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js?v=7', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'p_scripts' );


// register a couple nav menus
register_nav_menus( array(
	'main-menu' => 'Main',
	'header-aux' => 'Header (Auxiliary Links)',
	'footer-menu-one' => 'Footer (One)',
	'footer-menu-two' => 'Footer (Two)',
	'footer-menu-three' => 'Footer (Three)',
	'footer-menu-four' => 'Footer (Four)',
	'footer-menu-five' => 'Footer (Five)',
	'footer-aux' => 'Footer (Auxiliary Links)'
) );


// register a generic sidebar.
register_sidebar( array(
	'id' => 'sidebar-generic',
	'name'=> 'General Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title"><h4>',
    'after_title' => '</h4></div>',
) );


function theme_social_icon( $network ) {
	$social_link = get_field( 'social-' . $network, 'option' );
	if ( !empty( $social_link ) ) {
		?><a href="<?php print $social_link ?>" class="icon-gear" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social/<?php print $network ?>.svg?v=1" class="social-icon" /></a><?php
	}
}

