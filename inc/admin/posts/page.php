<?php
add_action('cmb2_admin_init', 'amin_register_metabox_page');
function amin_register_metabox_page()
{
    $option_key = "page";
    $cmb = new_cmb2_box(array(
        'id'            => 'amin_metabox_page',
        'title'         => __('setting', 'cmb2'),
        'object_types'  => array('page'),
        'context'       => 'side',
    ));

    $cmb->add_field([
        'name' => __('Show Title', 'amin'),
        'id' => $option_key . '_show_title',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Container', 'amin'),
        'id' => $option_key . '_container',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Sidebar position', 'amin'),
        'id' => $option_key . '_sidebar_position',
        'type' => 'select',
        'default' => 'none',
        'options' => [
            'none' => __('None', 'amin'),
            'right' => __('Right', 'amin'),
            'both_sides' => __('both sides', 'amin'),
            'left' => __('Left', 'amin'),
        ]
    ]);
}
