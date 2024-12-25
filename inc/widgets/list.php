<?php
class AminListWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_list_widget', // شناسه ابزارک
            __('List Amin', 'amin'), // نام ابزارک
            array('description' => __('', 'amin')) // توضیحات ابزارک
        );
    }

    // نمایش ابزارک در صفحه
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        $page = ! empty($instance['page']) ? $instance['page'] : 0;
        echo "<a href='".get_the_permalink($page)."'>".get_the_title($page)."</a>";
        echo $args['after_widget'];
    }

    // فرم تنظیمات ابزارک در پیشخوان
    public function form($instance)
    {
        $page_defualt = ! empty($instance['page']) ? $instance['page'] : 0;
?>
        <!-- HTML -->
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('page')); ?>"><?php _e(esc_attr('page:', 'amin')); ?></label>
            <select class="widefat" name="<?php echo esc_attr($this->get_field_name('page')); ?>" id="<?php echo esc_attr($this->get_field_id('page')); ?>">
                <?php
                $pages = get_posts([
                    'post_type' => 'page',
                    'numberposts' => -1
                ]);
                if ($pages):
                    foreach ($pages as $page):
                ?>
                        <option value="<?php echo $page->ID ?>" <?php if ($page_defualt == $page->ID) echo "selected"; ?>><?php echo $page->post_title ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </p>



<?php
    }

    // به‌روزرسانی تنظیمات ابزارک
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['page'] = (! empty($new_instance['page'])) ? strip_tags($new_instance['page']) : '';
        return $instance;
    }
}
?>