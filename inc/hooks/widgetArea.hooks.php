<?php
function amin_footer_widgets_area()
{
    $style_column = NEWAMINDisplaySetting()->FooterStyleColumn();
    for ($i = 1; $i <= $style_column; $i++) {
        register_sidebar(array(
            'name' => __('Footer Sidebar', 'amin').' '.$i,
            'id' => 'footer-sidebar-'.$i,
            'description' => __('Sidebar that appears in the footer.', 'amin'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));
    }
}
add_action('widgets_init', 'amin_footer_widgets_area');
