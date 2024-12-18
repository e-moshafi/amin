<?php get_header() ?>

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


<section>
    <div class="container">
        <?php the_content() ?>
    </div>
</section>




<?php
get_footer();
