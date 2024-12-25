<div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink() ?>">
                    <img alt="" src="<?php echo get_the_post_thumbnail_url() ?>">
                </a>
            <?php endif; ?>
            <?php
            $categories = get_the_category();
            if (!empty($categories)):
                foreach ($categories as $category):
                    if($category->term_id==1) continue;
            ?>
                    <span class="post-meta-category"><a href="<?php echo  esc_url( get_category_link( $category->term_id )) ?>"><?php echo esc_html( $category->name ) ?></a></span>
            <?php
                endforeach;
            endif; ?>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo jdate('d F Y', strtotime(get_the_date('Y-m-d h:i:s'))) ?></span>
            <span class="post-meta-comments"><a href="<?php the_permalink() ?>#comments"><i class="fa fa-comments-o"></i><?php echo __('comment','amin').' '.get_comments_number() ?></a></span>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <?php the_excerpt() ?>
            <a href="<?php the_permalink() ?>" class="item-link"><?php echo __('Read more') ?><i class="icon-chevron-left"></i></a>
        </div>
    </div>
</div>