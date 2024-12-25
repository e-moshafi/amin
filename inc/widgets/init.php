<?php 
require_once "tags.php";
require_once "search.php";
require_once "contact-information.php";
require_once "carousel-post.php";
require_once "last-posts.php";
require_once "list.php";
require_once "google_map.php";
function register_amin_wp_widget() {
    register_widget( 'AminTagsWpWidgets' );
    register_widget( 'AminSearchWpWidgets' );
    register_widget( 'AminContactInformationWpWidgets' );
    register_widget( 'AminCarouselPostWpWidgets' );
    register_widget( 'AminLastPostWpWidgets' );
    register_widget( 'AminListWpWidgets' );
    register_widget( 'AminMapWpWidgets' );
}
add_action( 'widgets_init', 'register_amin_wp_widget' );
