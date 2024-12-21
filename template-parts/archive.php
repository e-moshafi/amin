<?php
global $wp_query;
?>
<div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">


    <?php
    if ($wp_query->have_posts()):
        while ($wp_query->have_posts()): $wp_query->the_post();
            get_template_part('template-parts/archive/items/loop');
        endwhile;
    ?>
</div>
<?php
    else:
    endif;
