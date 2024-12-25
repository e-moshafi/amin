<?php
class AminMapWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_map_widget', // شناسه ابزارک
            __('Map Amin', 'amin'), // نام ابزارک
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
        if (! empty($instance['latlon'])) {
            echo   NewAminBasicTools()->DisplayGoogleMap($instance['latlon']);
        }
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : __('Map', 'amin');
        $latlon = ! empty($instance['latlon']) ? $instance['latlon'] : '';
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e(esc_attr('Title:', 'amin')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('latlon')); ?>"><?php _e(esc_attr('latitude & longitude:', 'amin')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('latlon')); ?>" name="<?php echo esc_attr($this->get_field_name('latlon')); ?>" type="text" value="<?php echo esc_attr($latlon); ?>">
        </p>

<?php
    }

    // به‌روزرسانی تنظیمات ابزارک
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['latlon'] = (! empty($new_instance['latlon'])) ? strip_tags($new_instance['latlon']) : '';
        return $instance;
    }
}
?>