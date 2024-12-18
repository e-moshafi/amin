<?php
add_action( 'cmb2_admin_init', 'amin_register_metabox_page' );
function amin_register_metabox_page() {
    $cmb = new_cmb2_box( array(
        'id'            => 'amin_metabox_page',
        'title'         => __( 'setting', 'cmb2' ),
        'object_types'  => array('page' ), 
        'context'       => 'side',
    ) );

    $cmb->add_field([
        'name' => __('Show Title', 'amin'),
        'id' => 'page_show_title',
        'type' => 'checkbox',
    ]);
    $cmb->add_field([
        'name' => __('Container', 'amin'),
        'id' => 'page_container',
        'type' => 'checkbox',
    ]);
}
?>
