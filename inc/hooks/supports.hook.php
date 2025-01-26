<?php
function amin_supports_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'elementor' );
}
add_action('after_setup_theme','amin_supports_theme');