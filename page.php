<?php get_header() ?>
<?php
$DisplaySettingHelper = NEWAMINDisplaySetting();
?>
<?php if ($DisplaySettingHelper->PageShowTitle()): ?>
    <section id="page-title" <?php if (has_post_thumbnail()) echo 'data-bg-parallax="' . get_the_post_thumbnail_url() . '"'  ?>>
        <div class="container">
            <div class="page-title">
                <h1><?php echo get_the_title() ?></h1>
                <span>جزئیات صفحه</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">خانه</a>
                    </li>
                    </li>
                    <li class="active"><a href="#"><?php echo get_the_title() ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>

<section>
    <div class="container<?php if (!$DisplaySettingHelper->PageContainer() || ($DisplaySettingHelper->PostsSidebarPositionAllow('right', get_the_ID()) && $DisplaySettingHelper->PostsSidebarPositionAllow('left', get_the_ID()))) echo "-fluid"; ?>">
        <?php if (!($DisplaySettingHelper->PostsSidebarPositionAllow('right', get_the_ID()) || $DisplaySettingHelper->PostsSidebarPositionAllow('left', get_the_ID()))) : ?>
            <?php the_content() ?>
        <?php endif; ?>
        <?php if ($DisplaySettingHelper->PostsSidebarPositionAllow('right', get_the_ID()) || $DisplaySettingHelper->PostsSidebarPositionAllow('left', get_the_ID())) : ?>
            <div class="row">
                <?php
                if ($DisplaySettingHelper->PostsSidebarPositionAllow('right', true)):
                ?>
                    <?php get_sidebar('right'); ?>
                <?php endif; ?>
                <div class="content col-lg">
                    <?php the_content() ?>
                </div>
                <?php
                if ($DisplaySettingHelper->PostsSidebarPositionAllow('left', true)):
                ?>
                    <?php get_sidebar('left'); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>




<?php
get_footer();
