<?php get_header() ?>
<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<section id="page-content">

    <div class="container<?php if ($DisplaySetting->PostsSidebarPositionAllow('right') && $DisplaySetting->PostsSidebarPositionAllow('left')) echo "-fluid" ?>">
        <div class="row">
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('right')):
            ?>
                <?php get_sidebar('right'); ?>
            <?php endif; ?>
            <div class="content col-lg">
                <?php echo get_template_part('template-parts/archive') ?>
            </div>
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('left')):
            ?>
                <?php get_sidebar('left'); ?>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php
get_footer();
