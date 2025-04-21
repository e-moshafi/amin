<?php
class AMINGenralSettingHelper extends AMINSettingHelper
{
    private $option_key = 'general_amin';
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
    }
    public function GetSocialLink($social)
    {
        $option = $this->get_field($this->option_key . '_' . $social);
        return $option;
    }
    public function GetLogo($mode = 'light')
    {
        $option = $this->get_field($mode . "_logo");
        return $option;
    }
    public function CopyRightText()
    {
        $option = $this->get_field("footer_copyright");
        return $option;
    }
}
function NEWAMINGenralSettingHelper()
{
    return new AMINGenralSettingHelper();
}
