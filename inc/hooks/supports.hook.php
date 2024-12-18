<?php
function amin_supports_theme(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','amin_supports_theme');