<?php
if (has_nav_menu('topbar-menu')) {
    wp_nav_menu(
        array(
            'theme_location' => 'topbar-menu',
            'container' => 'ul',
            'menu_class' => 'top-menu',
        )
    );
}
