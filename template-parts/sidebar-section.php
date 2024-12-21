<div class="sidebar <?php if (NEWAMINDisplaySetting()->StickySidebar()) echo "sticky-sidebar";  ?>  col-lg-3">
    <?php
    $position = !empty($args['position']) ? $args['position'] : 'left';
    ?>
    <?php if (is_active_sidebar($position . '-sidebar')) : ?>
        <?php dynamic_sidebar($position . '-sidebar'); ?>
    <?php endif; ?>
</div>