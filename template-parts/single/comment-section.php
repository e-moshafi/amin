<div class="comments" id="comments">
    <div class="comment_number">
        <?php echo __('Comment') ?> <span>(<?php echo get_comments_number() ?>)</span>
    </div>
    <?php if (have_comments()) : ?>
        <div class="comment-list">
            <?php wp_list_comments(array('style' => 'div', 'short_ping' => true, 'walker' => new AminCoustomComment())); ?>
        </div>
        <?php
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <div class="nav-links">
                    <?php
                    if ($prev_link = get_previous_comments_link(__('دیدگاه‌های قدیمی‌تر', 'textdomain'))) :
                    ?>
                        <div class="nav-previous"><?php echo $prev_link; ?></div>
                    <?php
                    endif;

                    if ($next_link = get_next_comments_link(__('دیدگاه‌های جدیدتر', 'textdomain'))) :
                    ?>
                        <div class="nav-next"><?php echo $next_link; ?></div>
                    <?php
                    endif;
                    ?>
                </div>
            </nav>
        <?php
        endif;
        ?>
    <?php endif; ?>
</div>