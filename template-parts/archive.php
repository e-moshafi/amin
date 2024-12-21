<?php
global $wp_query;
if ($wp_query->have_posts()):
    while ($wp_query->have_posts()): $wp_query->the_post();
    ?>
    <?php
    endwhile;
else:
endif;
