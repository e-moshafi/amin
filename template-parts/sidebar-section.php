<div class="sidebar <?php if (NEWAMINDisplaySetting()->StickySidebar()) echo "sticky-sidebar";  ?>  col-lg-3">
    <?php
    $position = !empty($args['position']) ? $args['position'] : 'left';
    if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('sidebar_'.$position)) :
        elementor_theme_do_location('sidebar_'.$position);
    else:
        if (is_active_sidebar($position . '-sidebar')) : ?>
            <?php dynamic_sidebar($position . '-sidebar'); ?>
    <?php endif;
    endif; ?>
</div>