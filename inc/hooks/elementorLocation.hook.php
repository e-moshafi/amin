<?php
function register_elementor_locations_amin( $elementor_theme_manager ) {
    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );
    $elementor_theme_manager->register_location( 'sidebar_left' );
}
add_action( 'elementor/theme/register_locations', 'register_elementor_locations_amin' );
