<?php
add_action('cmb2_admin_init', function () {
    $option_key = "contact_us_settings_amin";
    $cmb = new_cmb2_box(array(
        'id'           => $option_key . '_metabox',
        'title'        => esc_html__('Contact Us Settings', 'amin'),
        'object_types' => array('options-page'),
        'option_key'   => $option_key,
        'parent_slug' => 'general_amin',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Contact us', 'amin'),
        'id'   => $option_key . '_contact_us_title',
        'type' => 'title',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Address', 'amin'),
        'id'   => $option_key . '_address',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Phon Number', 'amin'),
        'id'   => $option_key . '_phone',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Eamil', 'amin'),
        'id'   => $option_key . '_email',
        'type' => 'text_email',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Woriking time', 'amin'),
        'id'   => $option_key . '_working_time',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => esc_html__('Google map api', 'amin'),
        'id'   => $option_key . '_google_map_api',
        'type' => 'text',
    ));
});
