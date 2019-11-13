<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
/*Funcion para animate.css*/
function theme_enqueue_styles() {

    wp_enqueue_style('anim-style', get_stylesheet_directory_uri() . '/animate.css');


}


?>