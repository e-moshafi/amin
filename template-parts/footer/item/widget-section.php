
<?php
$number=isset($args['number']) ? $args['number'] :1;
?>
<?php if (is_active_sidebar('footer-sidebar-'.$number)) : ?> 
    <?php dynamic_sidebar('footer-sidebar-'.$number); ?>
<?php endif; ?>