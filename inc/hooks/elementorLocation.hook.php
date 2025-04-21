<?php
function register_elementor_locations_amin($elementor_theme_manager)
{
    $elementor_theme_manager->register_location('header', [
        'label' => __('Header'),
        'multiple' => true
    ]);
    $elementor_theme_manager->register_location('footer', [
        'label' => __('Footer'),
        'multiple' => true
    ]);
    $elementor_theme_manager->register_location('sidebar_left', [
        'label' => __('Sidebar left', 'amin'),
        'multiple' => true
    ]);
    $elementor_theme_manager->register_location('sidebar_right', [
        'label' => __('Sidebar Right', 'amin'),
        'multiple' => true
    ]);
}
add_action('elementor/theme/register_locations', 'register_elementor_locations_amin');
