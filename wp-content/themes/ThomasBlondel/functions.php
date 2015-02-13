<?php
add_theme_support( 'post-thumbnails', array('post'));

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>