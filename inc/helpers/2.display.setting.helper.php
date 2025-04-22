<?php
class AMINDisplaySettingHelper extends AMINSettingHelper
{
    private $option_key = 'display_settings_amin';
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
    }
    public function DisplayTopBar()
    {
        $option = $this->get_field($this->option_key . '_display_top_bar');
        return $option == 'on';
    }
    public function StyleTopBar()
    {
        $option = $this->get_field($this->option_key . '_top_bar_style');
        return $option;
    }
    public function RightPositionTopBar()
    {
        $option = $this->get_field($this->option_key . '_top_bar_right_position');
        return $option;
    }
    public function PhoneTopBar()
    {
        $option = $this->get_field($this->option_key . '_top_bar_phone_number');
        return $option;
    }
    public function EmailTopBar()
    {
        $option = $this->get_field($this->option_key . '_top_bar_email');
        return $option;
    }
    public function StyleHeader()
    {
        $option = $this->get_field($this->option_key . '_header_style');
        return $option;
    }
    public function StickyHeader()
    {
        $option = $this->get_field($this->option_key . '_sticky_header');
        return $option == 'on';
    }
    public function StyleWidthHeader()
    {
        $option = $this->get_field($this->option_key . '_header_width_style');
        return $option;
    }
    public function LogoPositionHeader()
    {
        $option = $this->get_field($this->option_key . '_header_logo_position');
        return $option;
    }
    public function LogoPositionHeaderCssClass()
    {
        $LogoPositionHeader = $this->LogoPositionHeader();
        switch ($LogoPositionHeader) {
            case 'left':
                return 'header-logo-right';
                break;
            case 'middle':
                return 'header-logo-center';
                break;
        }
        return '';
    }
    public function StyleFooter()
    {
        $option = $this->get_field($this->option_key . '_footer_style');
        return $option;
    }
    public function CopyRightPostion()
    {
        $option = $this->get_field($this->option_key . '_footer_copyright_position');
        return $option;
    }
    public function DisplaySocialFooter()
    {
        $option = $this->get_field($this->option_key . '_display_social_footer');
        return $option == 'on';
    }
    public function FooterStyleColumn()
    {
        $option = $this->get_field($this->option_key . '_footer_style_column', 3);
        return $option;
    }
    public function PageShowTitle($ID = 0)
    {
        if ($ID == 0) $ID = get_the_ID();
        $option = get_post_meta($ID, 'page_show_title', 1);
        if (empty($option)) {
            $option = $this->get_field($this->option_key . 'page_show_title');
        }
        return $option == 'on';
    }
    public function PageContainer($ID = 0)
    {
        if ($ID == 0) $ID = get_the_ID();
        $option = get_post_meta($ID, 'page_container', 1);
        if (empty($option)) {
            $option = $this->get_field($this->option_key . 'page_container');
        }
        return $option == 'on';
    }
    public function PostsStyle()
    {
        $option = $this->get_field($this->option_key . '_posts_style', 'ThreeCol');
        return $option;
    }
    public function PostsStyleClassCss()
    {
        $option = $this->PostsStyle();
        switch ($option) {
            case "OneCol":
                $class = "post-1-columns";
                break;
            case "TwoCol":
                $class = "post-2-columns";
                break;
            case "ThreeCol":
                $class = "post-3-columns";
                break;
            case "FourCol":
                $class = "post-4-columns";
                break;
            case "modern":
                $class = "post-thumbnails post-1-columns";
                break;
            default:
                $class = "post-3-columns";
        }
        return $class;
    }
    public function PostsSidebarPosition($single = false)
    {
        if ($single === false) {
            $option = $this->get_field($this->option_key . '_posts_sidebar_position', 'left');
        } else {
            $option = $this->get_field($this->option_key . '_post_sidebar_position', 'left');
        }
        return $option;
    }
    public function PostSidebarPosition($ID = 0)
    {
        if ($ID == 0) $ID = get_the_ID();
        $post_type = get_post_type($ID);
        switch ($post_type) {
            case "page":
                $option_key = 'page_sidebar_position';
                break;
            case "post":
                $option_key = 'post_sidebar_position';
                break;
            default:
                $option_key = 'post_sidebar_position';
        }
        $option = get_post_meta($ID, $option_key, 1);
        if (empty($option)) $option = 'left';
        return $option;
    }
    public function PostsSidebarPositionAllow($position, $single = false)
    {
        if (is_bool($single)) {
            $option = $this->PostsSidebarPosition($single);
        } elseif (is_int($single)) {
            $option = $this->PostSidebarPosition($single);
        }
        switch ($option) {
            case "None":
                $allow = false;
                break;
            case "right":
                $allow = $position == 'right' ? true : false;
                break;
            case "both_sides":
                $allow = true;
                break;
            case "left":
                $allow = $position == 'left' ? true : false;
                break;
            default:
                $allow = false;
        }
        return $allow;
    }
    public function StickySidebar()
    {
        $option = $this->get_field($this->option_key . '_sidebar_sticky');
        return $option == 'on';
    }
}
function NEWAMINDisplaySetting()
{
    return new AMINDisplaySettingHelper();
}
