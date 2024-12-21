<?php get_header() ?>
<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<section id="page-content">

    <div class="container">
        <div class="row">
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('right')):
            ?>
                <div class="sidebar sticky-sidebar col-lg-3">

                    <?php get_sidebar('right'); ?>

                </div>
            <?php endif; ?>
            <div class="content col-lg">
                <?php echo get_template_part('template-parts/archive') ?>
            </div>
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('left')):
            ?>
                <div class="sidebar sticky-sidebar col-lg-3">

                    <?php get_sidebar('left'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php
get_footer();
