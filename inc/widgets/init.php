<?php 
require_once "tags.php";
require_once "search.php";
require_once "contact-information.php";
require_once "carousel-post.php";
function register_amin_wp_widget() {
    register_widget( 'AminTagsWpWidgets' );
    register_widget( 'AminSearchWpWidgets' );
    register_widget( 'AminContactInformationWpWidgets' );
    register_widget( 'AminCarouselPostWpWidgets' );
}
add_action( 'widgets_init', 'register_amin_wp_widget' );
