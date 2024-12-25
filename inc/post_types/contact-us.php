<?php
// تابع برای ثبت نوع پست سفارشی
function create_amin_contact_us_post_type() {
    $labels = array(
        'name'               => _x( 'Contacts', 'post type general name', 'amin' ),
        'singular_name'      => _x( 'Contact', 'post type singular name', 'amin' ),
        'menu_name'          => _x( 'Contacts', 'admin menu', 'amin' ),
        'name_admin_bar'     => _x( 'Contact', 'add new on admin bar', 'amin' ),
        'add_new'            => _x( 'Add New', 'Contact', 'amin' ),
        'add_new_item'       => __( 'Add New Contact', 'amin' ),
        'new_item'           => __( 'New Contact', 'amin' ),
        'edit_item'          => __( 'Edit Contact', 'amin' ),
        'view_item'          => __( 'View Contact', 'amin' ),
        'all_items'          => __( 'All Contacts', 'amin' ),
        'search_items'       => __( 'Search Contacts', 'amin' ),
        'parent_item_colon'  => __( 'Parent Contacts:', 'amin' ),
        'not_found'          => __( 'No Contacts found.', 'amin' ),
        'not_found_in_trash' => __( 'No Contacts found in Trash.', 'amin' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'contact' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'Contact', $args );
}

// هوک برای فراخوانی تابع هنگام راه‌اندازی تم
add_action( 'init', 'create_amin_contact_us_post_type' );
?>
