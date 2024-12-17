<?php
function amin_theme_register_menus() {
    register_nav_menus(
        array(
            'topbar-menu' => __( 'Topbar Menu', 'amin' ),
            'header-right-menu'  => __( 'Header Right Menu', 'amin' ),
            'header-left-menu'  => __( 'Header Left Menu', 'amin' ),
        )
    );
}
add_action( 'init', 'amin_theme_register_menus' );
