<?php 
/* 
====================
	CUSTOM PHP HERE
====================
*/

// Main SLider Image Sizing
add_image_size( 'slider-image', 1280, 775, true );
add_image_size( 'slider-image-small', 960, 581, true );
add_image_size( 'slider-image-retina', 1920, 1163, true );


// Sub Page Hero
add_image_size( 'sub-page', 1920 , 424, true );



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Testimonials',
        'menu_title'	=> 'Testimonials',
        'menu_slug' 	=> 'testimonials',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    /*acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));*/
}