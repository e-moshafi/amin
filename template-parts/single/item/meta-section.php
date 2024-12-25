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