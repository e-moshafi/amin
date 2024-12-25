<?php
class AMINContactUsHelper
{
    public static function Insert(array $arr)
    {
        $name = isset($arr['name']) ? strip_tags($arr['name']) : '';
        $email = isset($arr['email']) ? strip_tags($arr['email']) : '';
        $title = isset($arr['title']) ? strip_tags($arr['title']) : '';
        $title = $title . '-' . $name;
        $content = isset($arr['content']) ? strip_tags($arr['content']) : '';
        $post_id = wp_insert_post(
            [
                'post_content' => $content,
                'post_title' => $title,
            ]
        );
        if ($post_id !== false) {
            update_post_meta($post_id, 'name_author', $name);
            update_post_meta($post_id, 'email_author', $email);
        }
    }
    public static function InsertSafy(array $arr)
    {
        if (!isset($arr['name']) || empty($arr['name']) || strlen($arr['name']) > 120) return false;
        if (!isset($arr['email']) || empty($arr['email']) || strlen($arr['email']) > 120) return false;
        if (!isset($arr['title']) || empty($arr['title']) || strlen($arr['title']) > 200) return false;
        if (!isset($arr['content']) || empty($arr['content']) || strlen($arr['content']) > 1000) return false;
        return self::Insert($arr);

    }
    public static function Get(int $post_id)
    {
        $arr = [];
        $arr['name'] = get_post_meta($post_id, 'name_author', 1);
        $arr['email'] = get_post_meta($post_id, 'email_author', 1);
        $arr['content'] = get_the_content($post_id);
        $arr['title'] = get_the_title($post_id);
        return $arr;
    }
}
function AMINContactUsHelper()
{
    return new AMINContactUsHelper();
}
