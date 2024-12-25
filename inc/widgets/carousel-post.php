<?php
class AminCarouselPostWpWidgets extends WP_Widget
{

    // سازنده ابزارک
    public function __construct()
    {
        parent::__construct(
            'amin_wp_carousel_post_widget', // شناسه ابزارک
            __('Carousel Post Amin', 'amin'), // نام ابزارک
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
            <div class="carousel dots-inside-top dots-light" data-items="1" data-arrows="false"
                data-lightbox="gallery">
                <?php foreach ($lastPosts as $post_data):  ?>
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <?php if (has_post_thumbnail($post_data->ID)): ?>
                                <div class="post-image">
                                    <a href="<?php the_permalink($post_data->ID) ?>">
                                        <img alt="" src="<?php echo get_the_post_thumbnail_url($post_data->ID) ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo jdate('d F Y', strtotime(get_the_date('Y-m-d h:i:s', $post_data->ID))) ?></span>
                                <span class="post-meta-comments"><a href="<?php the_permalink($post_data->ID) ?>#comments"><i class="fa fa-comments-o"></i><?php echo __('Comment') . ' ' . get_comments_number($post_data->ID) ?></a></span>

                                <?php
                                $categories = get_the_category($post_data->ID);
                                if (!empty($categories)):
                                    foreach ($categories as $category):
                                        if ($category->term_id == 1) continue;
                                ?>
                                        <span class="post-meta-category"><a href="<?php echo  esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_html($category->name) ?></a></span>
                                <?php
                                    endforeach;
                                endif; ?>
                                <h2><a href="<?php the_permalink($post_data->ID) ?>"><?php the_title($post_data->ID) ?></a></h2>
                                <?php the_excerpt($post_data->ID) ?>
                                <a href="<?php the_permalink($post_data->ID) ?>" class="item-link"><?php echo __('Read more') ?><i class="icon-chevron-left"></i></a>
                            </div>
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
        $title = ! empty($instance['title']) ? $instance['title'] : __('Carousel Post', 'amin');
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