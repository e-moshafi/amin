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
    public function PhoneTopBar(){
        $option = $this->get_field($this->option_key . '_top_bar_phone_number');
        return $option;
    }
    public function EmailTopBar(){
        $option = $this->get_field($this->option_key . '_top_bar_email');
        return $option;
    }
}
function NEWAMINDisplaySetting()
{
    return new AMINDisplaySettingHelper();
}
