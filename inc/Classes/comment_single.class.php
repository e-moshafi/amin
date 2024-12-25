<?php
class AminCoustomComment extends Walker_Comment
{
    protected function comment($comment, $depth, $args)
    {
?>

        <?php if ('0' == $comment->comment_approved) : ?>
            <em><?php _e('دیدگاه شما در انتظار تایید است.'); ?></em><br>
        <?php endif; ?>
        <div <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
            <div class="image"> <?php echo get_avatar($comment, 48); ?> </div>
            <div class="text">
                <h5 class="name"> <?php echo get_comment_author() ?></h5>
                <span class="comment_date"> <?php printf(__('%1$s در %2$s'), jdate('m F Y', strtotime(get_comment_date('Y-m-d'))), get_comment_time()); ?> </span>
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                <div class="text_holder">
                    <?php comment_text(); ?>
                </div>
            </div>
        </div>
<?php
    }
}
?>