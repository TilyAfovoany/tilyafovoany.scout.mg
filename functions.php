<?php 

add_action( 'wp_enqueue_scripts', 'palawan_styles' );

function palawan_styles() {
	wp_enqueue_style( 
		'palawan', 
		get_parent_theme_file_uri( 'style.css' )
	);
}