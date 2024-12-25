<?php 
require_once "tags.php";
require_once "search.php";
function register_amin_wp_widget() {
    register_widget( 'AminTagsWpWidgets' );
    register_widget( 'AminSearchWpWidgets' );

}
add_action( 'widgets_init', 'register_amin_wp_widget' );
