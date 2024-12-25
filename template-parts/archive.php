<?php
global $wp_query;
?>
<div id="blog" class="grid-layout  <?php echo NEWAMINDisplaySetting()->PostsStyleClassCss()  ?> m-b-30" data-item="post-item">


    <?php
    if ($wp_query->have_posts()):
        while ($wp_query->have_posts()): $wp_query->the_post();
            get_template_part('template-parts/archive/items/loop');
        endwhile;
    ?>
    <?php
    else:
        echo '<p>هیچ پستی یافت نشد.</p>';
    endif;
    wp_reset_postdata();
    ?>
</div>
<?php

if ($wp_query->have_posts()):
    $html_pagination = get_the_posts_pagination(array('mid_size' => 2, 'class' => '', 'screen_reader_text' => '', 'type' => 'list', 'prev_text' => __('«'), 'next_text' => __('»'),));
    $html_pagination = str_replace('<ul class=\'page-numbers\'>', '<ul class="pagination">', $html_pagination);
    $html_pagination = str_replace('<li>', '<li class="page-item">', $html_pagination);
    $html_pagination = str_replace('page-numbers', 'page-link', $html_pagination);
    $pattern = '/<li class="page-item"><span aria-current="page" class="page-link current">(.*?)<\/span><\/li>/s';
    preg_match($pattern, $html_pagination, $matches);
    if(!empty($matches)){
        $active_page_before=$matches[0];
        $active_page = str_replace('page-item', 'page-item active', $active_page_before);
        $html_pagination=str_replace($active_page_before, $active_page, $html_pagination);
    }
    echo $html_pagination;
endif;
?>