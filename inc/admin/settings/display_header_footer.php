<?php
add_action('cmb2_admin_init', function () {
    $option_key = "display_settings_ahoo";
    $cmb = new_cmb2_box(array(
        'id'           => $option_key . '_metabox',
        'title'        => esc_html__('Display Settings', 'ahoo'),
        'object_types' => array('options-page'),
        'option_key'   => $option_key,
        'parent_slug' => 'general_ahoo',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Top header', 'ahoo'),
        'id'   => $option_key . '_top_header_style_title',
        'type' => 'title',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Display top bar ', 'ahoo'),
        'id'   => $option_key . '_display_top_bar',
        'type' => 'checkbox',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Style', 'ahoo'),
        'id' => $option_key . '_top_bar_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'ahoo'),
            'dark_mod' => __('Dark mode', 'ahoo'),
        ]
    ));
    $cmb->add_field([
        'name' => __('Right position', 'ahoo'),
        'desc' => __('The style of the right position', 'ahoo'),
        'id' => $option_key . '_top_bar_right_position',
        'type' => 'select',
        'default' => 'menu',
        'options' => [
            'menu' => __('Show menu', 'ahoo'),
            'email' => __('Show Email', 'ahoo'),
            'phone' => __('Show phone number', 'ahoo')
        ]

    ]);
    $cmb->add_field([
        'name' => __('Email', 'ahoo'),
        'id' => $option_key . '_top_bar_email',
        'type' => 'text_email'
    ]);
    $cmb->add_field([
        'name' => __('Phone number', 'ahoo'),
        'id' => $option_key . '_top_bar_phone_number',
        'type' => 'text'
    ]);
    $cmb->add_field([
        'name' => __('Header', 'ahoo'),
        'id' => $option_key . '_header',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Style', 'ahoo'),
        'id' => $option_key . '_header_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'ahoo'),
            'dark_mod' => __('Dark mode', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sticky header', 'ahoo'),
        'id' => $option_key . '_stick_header',
        'type' => 'checkbox',
        'default' => 1
    ]);
    $cmb->add_field([
        'name' => __('Header style', 'ahoo'),
        'id' => $option_key . '_header_width_style',
        'type' => 'select',
        'default' => 'classic',
        'options' => [
            'classic' => __('Classic', 'ahoo'),
            'modern' => __('Modern', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Menu style', 'ahoo'),
        'desc' => __('Menu style in desktop mode', 'ahoo'),
        'id' => $option_key . '_desktop_header_menu_style',
        'type' => 'select',
        'default' => 'classic',
        'options' => [
            'classic' => __('Classic', 'ahoo'),
            'modern' => __('Modern', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Logo Position', 'ahoo'),
        'id' => $option_key . '_header_logo_position',
        'type' => 'select',
        'default' => 'right',
        'options' => [
            'right' => __('Right', 'ahoo'),
            'middle' => __('Middle', 'ahoo'),
            'left' => __('Left', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Login action', 'ahoo'),
        'desc' => __('How to login', 'ahoo'),
        'id' => $option_key . '_login_action',
        'type' => 'select',
        'default' => 'popup',
        'options' => [
            'popup' => __('Popup', 'ahoo'),
            'classic' => __('Classic', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Footer', 'ahoo'),
        'id' => $option_key . '_footer',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Style', 'ahoo'),
        'id' => $option_key . '_footer_style',
        'type' => 'select',
        'default' => 'light_mod',
        'options' => [
            'light_mod' => __('Light mode', 'ahoo'),
            'dark_mod' => __('Dark mode', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Style column', 'ahoo'),
        'desc' => __('Number of footer columns', 'ahoo'),
        'id' => $option_key . '_footer_style_column',
        'type' => 'select',
        'default' => '3',
        'options' => [
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5
        ]
    ]);
    $cmb->add_field([
        'name' => __('Copyright position', 'ahoo'),
        'id' => $option_key . '_footer_copyright_position',
        'type' => 'select',
        'default' => 'middle',
        'options' => [
            'right' => __('Right', 'ahoo'),
            'middle' => __('Middle', 'ahoo'),
            'left' => __('Left', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Posts', 'ahoo'),
        'id' => $option_key . '_posts',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name' => __('Pagination style', 'ahoo'),
        'id' => $option_key . '_posts_pagintion_style',
        'type' => 'select',
        'default' => 'classic',
        'options' => [
            'classic' => __('Classic', 'ahoo'),
            'modern' => __('Modern', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Sidebar position', 'ahoo'),
        'id' => $option_key . '_footer_sidebar_position',
        'type' => 'select',
        'default' => 'left',
        'options' => [
            'right' => __('Right', 'ahoo'),
            'both_sides' => __('both sides', 'ahoo'),
            'left' => __('Left', 'ahoo'),
        ]
    ]);
    $cmb->add_field([
        'name' => __('Page', 'ahoo'),
        'id' => $option_key . '_page',
        'type' => 'title'
    ]);
    $cmb->add_field([
        'name'=>__('Show Title', 'ahoo'),
        'id'=>$option_key.'page_show_title',
        'type'=>'checkbox',
        'default' =>1
    ]);
    $cmb->add_field([
        'name'=>__('Container', 'ahoo'),
        'id'=>$option_key.'page_container',
        'type'=>'checkbox',
        'default' =>1
    ]);
});
