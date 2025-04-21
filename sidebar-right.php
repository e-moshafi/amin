<?php
if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('header')) :
    elementor_theme_do_location('sidebar_right');
else:
    get_template_part('template-parts/sidebar', 'section', ['position' => 'right']);
endif;
