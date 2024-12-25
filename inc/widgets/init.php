<?php 
require_once "tags.php";
function register_amin_wp_widget() {
    register_widget( 'AminTagsWpWidgets' );
}
add_action( 'widgets_init', 'register_amin_wp_widget' );
