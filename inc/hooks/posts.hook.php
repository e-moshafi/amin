<?php
function amin_custom_post_excerpt_length($length)
{
    if ($length < 20) return $length;
    return 20;
}
add_filter('excerpt_length', 'amin_custom_post_excerpt_length', 999);
function amin_custom_post_excerpt_more($more)
{
    if (! is_single()) {
        $more = ' ...';
    }

    return $more;
}
add_filter('excerpt_more', 'amin_custom_post_excerpt_more');
