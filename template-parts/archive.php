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
            get_template_part('template-parts/archive/items/pagination');
?>