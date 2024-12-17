<?php
function amin_theme_register_menus() {
    register_nav_menus(
        array(
            'topbar-menu' => __( 'Topbar Menu', 'amin' ),
            'header-main-menu'  => __( 'Header Main Menu', 'amin' ),
        )
    );
}
add_action( 'init', 'amin_theme_register_menus' );
