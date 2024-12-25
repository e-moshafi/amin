<?php get_header() ?>
<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<section id="page-content">

    <div class="container<?php if ($DisplaySetting->PostsSidebarPositionAllow('right', true) && $DisplaySetting->PostsSidebarPositionAllow('left', true)) echo "-fluid" ?>">
        <div class="row">
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('right', true)):
            ?>
                <?php get_sidebar('right'); ?>
            <?php endif; ?>
            <div class="content col-lg">
                <div class="content col-lg-9">

                    <div id="blog" class="single-post">

                        <div class="post-item">
                            <div class="post-item-wrap">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php get_template_part('template-parts/single/item/thumbnail') ?>
                                <?php endif; ?>
                                <div class="post-item-description">
                                    <?php get_template_part('template-parts/single/item/title') ?>
                                    <?php get_template_part('template-parts/single/item/meta', 'section') ?>
                                    <?php the_content() ?>
                                </div>
                                <?php get_template_part('template-parts/single/item/tags') ?>
                                <?php get_template_part('template-parts/single/item/navigation') ?>
                                <?php if (comments_open() || get_comments_number()) {
                                    comments_template();
                                } ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('left', true)):
            ?>
                <?php get_sidebar('left'); ?>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php
get_footer();
