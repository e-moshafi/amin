<?php
add_action('cmb2_admin_init', 'amin_register_metabox_post');
function amin_register_metabox_post()
{
    $option_key = "post";
    $cmb = new_cmb2_box(array(
        'id'            => 'amin_metabox_post',
        'title'         => __('setting', 'cmb2'),
        'object_types'  => array('post'),
        'context'       => 'side',
    ));
    $cmb->add_field([
        'name' => __('Sidebar position', 'amin'),
        'id' => $option_key . '_sidebar_position',
        'type' => 'select',
        'default' => 'default',
        'options' => [
            'default' => __('Default', 'amin'),
            'none' => __('None', 'amin'),
            'right' => __('Right', 'amin'),
            'both_sides' => __('both sides', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
}
