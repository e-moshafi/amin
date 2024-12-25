<?php
class AminSearchWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_search_widget', // شناسه ابزارک
            __('Search Amin', 'amin'), // نام ابزارک
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
        get_search_form();
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : __('Search');
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e(esc_attr('Title:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

<?php
    }

    // به‌روزرسانی تنظیمات ابزارک
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
?>