<?php
$args_comment_form = [];
$required_indicator = ' ' . wp_required_field_indicator();
$required_text      = ' ' . wp_required_field_message();
$req   = get_option('require_name_email');
$commenter     = wp_get_current_commenter();

$args_comment_form['fields']['author'] = sprintf(
    '<div class="row"> <div class="col-lg"> <div class="form-group">%s %s</div></div>',
    sprintf(
        '<label  class="upper"  for="author">%s%s</label>',
        __('Name'),
        ($req ? $required_indicator : '')
    ),
    sprintf(
        '<input id="author" name="author" placeholder="%s"  aria-required="true" class="form-control required" type="text" value="%s" size="30" maxlength="245" autocomplete="name"%s />',
        __('Enter Your Name', 'amin'),
        esc_attr($commenter['comment_author']),
        'required'
    )
);
$args_comment_form['fields']['email'] = sprintf(
    '<div class="col-lg"> <div class="form-group">%s %s</div></div></div>',
    sprintf(
        '<label  class="upper"  for="email">%s%s</label>',
        __('Email'),
        ($req ? $required_indicator : '')
    ),
    sprintf(
        '<input id="email" name="email" placeholder="%s"  aria-required="true" class="form-control required" type="email" value="%s" size="30" maxlength="100" autocomplete="name"%s />',
        __('Enter Your Email', 'amin'),
        esc_attr($commenter['comment_author_email']),
        'required'
    )
);
if (has_action('set_comment_cookies', 'wp_set_comment_cookies') && get_option('show_comments_cookies_opt_in')) {
    $consent = empty($commenter['comment_author_email']) ? '' : $checked_attribute;

    $args_comment_form['fields']['cookies'] = sprintf(
        '<p class="comment-form-cookies-consent">%s %s</p>',
        sprintf(
            '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" class="" type="checkbox" value="yes"%s />',
            $consent
        ),
        sprintf(
            '<label for="wp-comment-cookies-consent">%s</label>',
            __('Save my name, email, and website in this browser for the next time I comment.')
        )
    );

    // Ensure that the passed fields include cookies consent.
    if (isset($args_comment_form['fields']) && ! isset($args_comment_form['fields']['cookies'])) {
        $args_comment_form['fields']['cookies'] = $args_comment_form['fields']['cookies'];
    }
}
$args_comment_form['comment_field'] = sprintf(
    ' <div class="row"> <div class="col-lg-12"> <div class="form-group">%s %s</div></div></div>',
    sprintf(
        '<label class="upper" for="comment">%s%s</label>',
        __('Comment'),
        $required_indicator
    ),
    sprintf(
        '<textarea id="comment" name="comment"  class="form-control required" aria-required="true" placeholder="%s"  cols="45" rows="8" maxlength="65525"></textarea>',
        __('Enter your comment.', 'amin')
    )
);
$args_comment_form['submit_field']=' <div class="row"> <div class="col-lg-12"><div class="form-group text-center">%1$s %2$s</div></div></div>';
$args_comment_form['class_submit']="btn";
?>
<div class="respond-form" id="respond">
    <?php
    comment_form($args_comment_form);
    ?>
</div>