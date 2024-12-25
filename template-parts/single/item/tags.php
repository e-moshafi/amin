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