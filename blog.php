<?php
/* Template Name: وبلاگ  */
get_header();
$DisplaySetting = NEWAMINDisplaySetting();
?>
<section id="page-content">

    <div class="container<?php if ($DisplaySetting->PostsSidebarPositionAllow('right') && $DisplaySetting->PostsSidebarPositionAllow('left')) echo "-fluid" ?>">
        <div class="page-title">
            <h1><?php the_title() ?></h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="<?php echo home_url() ?>">خانه</a>
                    </li>
                    <li class="active"><a href="#"><?php the_title() ?> </a>
                    </li>
                </ul>
            </div>
        </div>
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
