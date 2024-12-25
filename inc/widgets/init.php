<?php 
require_once "tags.php";
require_once "search.php";
require_once "contact-information.php";
function register_amin_wp_widget() {
    register_widget( 'AminTagsWpWidgets' );
    register_widget( 'AminSearchWpWidgets' );
    register_widget( 'AminContactInformationWpWidgets' );

}
add_action( 'widgets_init', 'register_amin_wp_widget' );
