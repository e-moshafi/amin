<?php
add_action('cmb2_admin_init', function () {
    $option_key = "display_settings_amin";
    $cmb = new_cmb2_box(array(
        'id'           => $option_key . '_metabox',
        'title'        => esc_html__('Display Settings', 'amin'),
        'object_types' => array('options-page'),
        'option_key'   => $option_key,
        'parent_slug' => 'general_amin',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Top header', 'amin'),
        'id'   => $option_key . '_top_header_style_title',
        'type' => 'title',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Display top bar ', 'amin'),
        'id'   => $option_key . '_display_top_bar',
        'type' => 'checkbox',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Style', 'amin'),
        'id' => $option_key . '_top_bar_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'amin'),
            'dark_mod' => __('Dark mode', 'amin'),
        ]
    ));
    $cmb->add_field([
        'name' => __('Right position', 'amin'),
        'desc' => __('The style of the right position', 'amin'),
        'id' => $option_key . '_top_bar_right_position',
        'type' => 'select',
        'default' => 'menu',
        'options' => [
            'menu' => __('Show menu', 'amin'),
            'email_phone' => __('Show Email & phone', 'amin'),
        ]

    ]);
    $cmb->add_field([
        'name' => __('Email', 'amin'),
        'id' => $option_key . '_top_bar_email',
        'type' => 'text_email'
    ]);
    $cmb->add_field([
        'name' => __('Phone number', 'amin'),
        'id' => $option_key . '_top_bar_phone_number',
        'type' => 'text'
    ]);
    $cmb->add_field([
        'name' => __('Header', 'amin'),
        'id' => $option_key . '_header',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Style', 'amin'),
        'id' => $option_key . '_header_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'amin'),
            'dark_mod' => __('Dark mode', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sticky header', 'amin'),
        'id' => $option_key . '_sticky_header',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Header style', 'amin'),
        'id' => $option_key . '_header_width_style',
        'type' => 'select',
        'default' => 'classic',
        'options' => [
            'classic' => __('Classic', 'amin'),
            'modern' => __('Modern', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Logo Position', 'amin'),
        'id' => $option_key . '_header_logo_position',
        'type' => 'select',
        'default' => 'right',
        'options' => [
            'right' => __('Right', 'amin'),
            'middle' => __('Middle', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Login action', 'amin'),
        'desc' => __('How to login', 'amin'),
        'id' => $option_key . '_login_action',
        'type' => 'select',
        'default' => 'popup',
        'options' => [
            'popup' => __('Popup', 'amin'),
            'classic' => __('Classic', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Footer', 'amin'),
        'id' => $option_key . '_footer',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Style', 'amin'),
        'id' => $option_key . '_footer_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'amin'),
            'dark_mod' => __('Dark mode', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Style column', 'amin'),
        'desc' => __('Number of footer columns', 'amin'),
        'id' => $option_key . '_footer_style_column',
        'type' => 'select',
        'default' => '3',
        'options' => [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5
        ]
    ]);
    $cmb->add_field([
        'name' => __('Copyright position', 'amin'),
        'id' => $option_key . '_footer_copyright_position',
        'type' => 'select',
        'default' => 'center',
        'options' => [
            'right' => __('Right', 'amin'),
            'center' => __('Center', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
    $cmb->add_field(array(
        'name' => esc_html__('Display Social NetWork In Footer ', 'amin'),
        'id'   => $option_key . '_display_social_footer',
        'type' => 'checkbox',
    ));
    $cmb->add_field([
        'name' => __('Posts', 'amin'),
        'id' => $option_key . '_posts',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('style', 'amin'),
        'id' => $option_key . '_posts_style',
        'type' => 'select',
        'default' => 'ThreeCol',
        'options' => [
            'modern' => __('Modern', 'amin'),
            'OneCol' => __('Single column', 'amin'),
            'TwoCol' => __('Two column', 'amin'),
            'ThreeCol' => __('Three column', 'amin'),
            'FourCol' => __('Four column', 'amin'),

        ]
    ]);
    $cmb->add_field([
        'name' => __('Pagination style', 'amin'),
        'id' => $option_key . '_posts_pagintion_style',
        'type' => 'select',
        'default' => 'classic',
        'options' => [
            'classic' => __('Classic', 'amin'),
            'modern' => __('Modern', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sidebar position', 'amin'),
        'id' => $option_key . '_posts_sidebar_position',
        'type' => 'select',
        'default' => 'left',
        'options' => [
            'none'=>__('None','amin'),
            'right' => __('Right', 'amin'),
            'both_sides' => __('both sides', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sidebar position in single', 'amin'),
        'id' => $option_key . '_post_sidebar_position',
        'type' => 'select',
        'default' => 'left',
        'options' => [
            'none'=>__('None','amin'),
            'right' => __('Right', 'amin'),
            'both_sides' => __('both sides', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sticky Sidebar', 'amin'),
        'id' => $option_key . '_sidebar_sticky',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Page', 'amin'),
        'id' => $option_key . '_page',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Show Title', 'amin'),
        'id' => $option_key . 'page_show_title',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Container', 'amin'),
        'id' => $option_key . 'page_container',
        'type' => 'checkbox',
    ]);
});
