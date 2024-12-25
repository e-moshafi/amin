<?php
class AminTagsWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_tags_widget', // شناسه ابزارک
            __('Tags Amin', 'amin'), // نام ابزارک
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
        $allTags = get_tags(['number'=>$count]); //gets all the tags
?>
        <div class="tags">
            <?php
            foreach ($allTags as $key_tag => $tag) {
            ?>
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)) ?>"><?php echo esc_html($tag->name) ?></a>
            <?php
            }

            ?>

        </div>
    <?php
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : __('Tag','amin');
        $count = ! empty($instance['count']) ? $instance['count'] : 10;
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e(esc_attr('Title:','amin')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('count')); ?>"><?php _e(esc_attr('Count:','amin')); ?></label>
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