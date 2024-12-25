<?php
class AminContactInformationWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_contact_inforamtion_widget', // شناسه ابزارک
            __('Contact information Amin', 'amin'), // نام ابزارک
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
?>
        <ul class="list-icon">
            <?php if (!empty($instance['address'])): ?>
                <li><i class="icon-map-pin"></i>
                    <strong>آدرس : </strong> <?php echo $instance['address'] ?>
                </li>
            <?php endif; ?>
            <?php if (!empty($instance['phone'])): ?>
                <li><i class="icon-phone"></i><strong>تلفن : </strong> <?php echo $instance['phone'] ?> </li>
            <?php endif; ?>
            <?php if (!empty($instance['email'])): ?>
                <li><i class="icon-mail"></i><strong>ایمیل : </strong> <a
                        href="mailto:<?php echo $instance['email'] ?>"><?php echo $instance['email'] ?></a>
                </li>
            <?php endif; ?>
            <?php if (!empty($instance['working_time'])): ?>
                <li><i class="icon-clock"></i>
                    <?php echo $instance['working_time'] ?></a>
                </li>
            <?php endif; ?>
        </ul>
    <?php
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : __('Contact us');
        $address = ! empty($instance['address']) ? $instance['address'] : '';
        $phone = ! empty($instance['phone']) ? $instance['phone'] : '';
        $email = ! empty($instance['email']) ? $instance['email'] : '';
        $working_time = ! empty($instance['working_time']) ? $instance['working_time'] : '';

    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e(esc_attr('Title:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php _e(esc_attr('Address:')); ?></label>
            <textarea class="widefat" name="<?php echo esc_attr($this->get_field_name('address')); ?>" id="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php echo esc_attr($address); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php _e(esc_attr('Phone:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php _e(esc_attr('Email:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('working_time')); ?>"><?php _e(esc_attr('Working time:')); ?></label>
            <textarea class="widefat" name="<?php echo esc_attr($this->get_field_name('working_time')); ?>" id="<?php echo esc_attr($this->get_field_id('working_time')); ?>"><?php echo esc_attr($working_time); ?></textarea>
        </p>
<?php
    }

    // به‌روزرسانی تنظیمات ابزارک
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['address'] = (! empty($new_instance['address'])) ? strip_tags($new_instance['address']) : '';
        $instance['phone'] = (! empty($new_instance['phone'])) ? strip_tags($new_instance['phone']) : '';
        $instance['email'] = (! empty($new_instance['email'])) ? strip_tags($new_instance['email']) : '';
        $instance['working_time'] = (! empty($new_instance['working_time'])) ? strip_tags($new_instance['working_time']) : '';
        return $instance;
    }
}
?>