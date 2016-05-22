<?php 
function themeone_theme_setup() {
	add_theme_support('post-thumbnails' );
}
add_action( 'after_setup_theme', 'themeone_theme_setup' );

add_image_size( 'profolio-size', 400, 289, true );