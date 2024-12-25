<?php
class AminLastPostWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_last_post_widget', // شناسه ابزارک
            __('Last Post Amin', 'amin'), // نام ابزارک
            array('description' => __('', 'amin')) // توضیحات ابزارک
        );
    }

    // نمایش ابزارک در صفحه
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (! empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        $count = ! empty($instance['count']) ? $instance['count'] : 10;
        $lastPosts = get_posts(array(
            'numberposts' => 5
        ));
        if ($lastPosts):

?>
            <div class="post-thumbnail-list">
                <?php foreach ($lastPosts as $post_data):  ?>

                    <div class="post-thumbnail-entry">
                        <?php if (has_post_thumbnail($post_data->ID)): ?>
                            <img alt="" src="<?php echo get_the_post_thumbnail_url($post_data->ID) ?>">
                        <?php endif; ?>

                        <div class="post-thumbnail-content">
                            <a href="<?php the_permalink($post_data->ID) ?>"><?php the_title($post_data->ID) ?></a>
                            <span class="post-date"><i class="icon-clock"></i> <?php echo NewAminBasicTools()->TimeDisplay((time()-strtotime(get_the_date('Y-m-d h:i:s', $post_data->ID)))) ?>
                                قبل</span>
                            <?php
                            $categories = get_the_category($post_data->ID);
                            if (!empty($categories)):
                            ?>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    <?php
                                    $categories_html = '';
                                    foreach ($categories as $category):
                                        if ($category->term_id == 1) continue;
                                        $categories_html .= esc_html($category->name);
                                    endforeach;
                                    echo $categories_html;
                                    ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php
        endif;
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : __('Last Post', 'amin');
        $count = ! empty($instance['count']) ? $instance['count'] : 10;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e(esc_attr('Title:', 'amin')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('count')); ?>"><?php _e(esc_attr('Count:', 'amin')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('count')); ?>" name="<?php echo esc_attr($this->get_field_name('count')); ?>" type="number" value="<?php echo esc_attr($count); ?>" min=5>
        </p>

<?php
    }

    // به‌روزرسانی تنظیمات ابزارک
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['count'] = (! empty($new_instance['count'])) ? strip_tags($new_instance['count']) : 10;
        return $instance;
    }
}
?>