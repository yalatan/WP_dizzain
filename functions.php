<?php 

 function set_style() {
      wp_enqueue_style( 'reset', get_template_directory_uri() . '/reset.css' );	 
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts','set_style' );

function load_script() {  
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' );
}
add_action('wp_enqueue_scripts','load_script' );



