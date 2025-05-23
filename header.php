<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="body-inner">
        <?php
        if (NEWAMINDisplaySetting()->DisplayTopBar()) {
            get_template_part('template-parts/topbar', 'section');
        }
        ?>
        <?php
        if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('header')) :
            elementor_theme_do_location('header');
        else:
            get_template_part('template-parts/header', 'section');
        endif;
        ?>