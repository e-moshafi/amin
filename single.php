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
                                    <div class="post-image">
                                        <a href="<?php the_permalink() ?>">
                                            <img alt="" src="<?php echo get_the_post_thumbnail_url() ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="post-item-description">
                                    <h2> <?php the_title() ?></h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo jdate('d F Y', strtotime(get_the_date('Y-m-d h:i:s'))) ?></span>
                                        <span class="post-meta-comments"><a href="#comments"><i
                                                    class="fa fa-comments-o"></i><?php echo __('comment', 'amin') . ' ' . get_comments_number() ?></a></span>
                                        <span class="post-meta-category"><i class="fa fa-tag"></i>
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)):
                                                foreach ($categories as $category):
                                                    if ($category->term_id == 1) continue;
                                            ?>
                                                    <a href="<?php echo  esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_html($category->name) ?></a>
                                            <?php
                                                endforeach;
                                            endif; ?>
                                        </span>
                                        <div class="post-meta-share">
                                            <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                                <span>فیسبوک</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                                <i class="fab fa-twitter"></i>
                                                <span>توییتر</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                                <i class="fab fa-instagram"></i>
                                                <span>اینستاگرام</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#"
                                                data-width="80">
                                                <i class="icon-mail"></i>
                                                <span>ایمیل</span>
                                            </a>
                                        </div>
                                    </div>
                                    <?php the_content() ?>
                                </div>
                                <div class="post-tags">
                                    <?php
                                    $tags = get_the_tags();
                                    if (!empty($tags)) {
                                        $tag_html = '';
                                        foreach ($tags as $tag) {
                                            $tag_html .= '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a> ';
                                        }
                                        echo $tag_html;
                                    }
                                    ?>
                                </div>
                                <div class="post-navigation">
                                    <?php
                                    $prev_post = get_previous_post();
                                    if (!empty($prev_post)): ?>
                                        <a href="<?php echo get_permalink($prev_post->ID) ?>" class="post-prev">
                                            <div class="post-prev-title"><span>پست قبلی</span> <?php echo get_the_title($prev_post->ID) ?></div>
                                        </a>
                                    <?php endif; ?>

                                    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="post-all">
                                        <i class="icon-grid"> </i>
                                    </a>
                                    <?php
                                    $next_post = get_next_post();
                                    if (!empty($next_post)): ?>
                                        <a href="<?php echo get_permalink($next_post->ID) ?>" class="post-next">
                                            <div class="post-next-title"><span>پست بعدی</span>
                                                <?php echo get_the_title($next_post->ID) ?>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                </div>
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
