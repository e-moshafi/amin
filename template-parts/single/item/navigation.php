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