<?php
add_action('cmb2_admin_init', function () {
  $option_key = "general_ahoo";
  $cmb = new_cmb2_box([
    'id'           => $option_key . '_metabox',
    'title'        => esc_html__('Theme Settings', 'ahoo'),
    'object_types' => array('options-page'),
    'option_key'   => $option_key,
  ]);
  $cmb->add_field([
    'name' => esc_html__('General Settings', 'ahoo'),
    'id'   => $option_key . '_general_title',
    'type' => 'title',
  ]);
  $cmb->add_field([
    'name' => esc_html__('Light logo', 'ahoo'),
    'id' => 'light_logo',
    'type' => 'file'
  ]);
  $cmb->add_field([
    'name' => esc_html__('Dark logo', 'ahoo'),
    'id' => 'dark_logo',
    'type' => 'file'
  ]);
  $cmb->add_field([
    'name' => esc_html__('Footer Copyright', 'ahoo'),
    'id' => 'footer_copyright',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('Social network', 'ahoo'),
    'id' => $option_key . '_social_network',
    'type' => 'title'
  ]);
  $cmb->add_field([
    'name' => __('Linkedin', 'ahoo'),
    'id' => $option_key . '_linkedin',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('Instagram', 'ahoo'),
    'id' => $option_key . '_instagram',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('Telegram', 'ahoo'),
    'id' => $option_key . '_telegram',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('Whatsapp', 'ahoo'),
    'id' => $option_key . '_whatsapp',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('X', 'ahoo'),
    'id' => $option_key . '_x',
    'type' => 'text'
  ]);
  $cmb->add_field([
    'name' => __('Youtube', 'ahoo'),
    'id' => $option_key . '_youtube',
    'type' => 'text'
  ]);
});
