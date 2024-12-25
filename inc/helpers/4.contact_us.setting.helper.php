<?php
class AMINContactUsSettingHelper extends AMINSettingHelper
{
    private $option_key = 'contact_us_settings_amin';
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
    }
    public function GetAddress(){
        $option = $this->get_field($this->option_key . '_address', 3);
        return $option;
    }
    public function GetPhone(){
        $option = $this->get_field($this->option_key . '_phone', 3);
        return $option;
    }
    public function GetEmail(){
        $option = $this->get_field($this->option_key . '_email', 3);
        return $option;
    }
    public function GetWorkingTime(){
        $option = $this->get_field($this->option_key . '_working_time', 3);
        return $option;
    }
}
function NEWAMINContactUsSetting()
{
    return new AMINContactUsSettingHelper();
}
