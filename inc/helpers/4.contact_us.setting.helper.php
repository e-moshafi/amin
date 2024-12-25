<?php
class AMINContactUsSettingHelper extends AMINSettingHelper
{
    private $option_key = 'contact_us_settings_amin';
    public $Address;
    public $Phone;
    public $Email;
    public $WorkingTime;
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
        $this->GetAddress();
        $this->GetPhone();
        $this->GetEmail();
        $this->GetWorkingTime();
    }
    public function GetAddress()
    {
        $option = $this->get_field($this->option_key . '_address', 3);
        $this->Address = $option;
        return $option;
    }
    public function GetPhone()
    {
        $option = $this->get_field($this->option_key . '_phone', 3);
        $this->Phone = $option;
        return $option;
    }
    public function GetEmail()
    {
        $option = $this->get_field($this->option_key . '_email', 3);
        $this->Email = $option;
        return $option;
    }
    public function GetWorkingTime()
    {
        $option = $this->get_field($this->option_key . '_working_time', 3);
        $this->WorkingTime = $option;
        return $option;
    }
    public function GetGoogleMapApi()
    {
        $option = $this->get_field($this->option_key . '_google_map_api', 3);
        return $option;
    }
}
function NEWAMINContactUsSetting()
{
    return new AMINContactUsSettingHelper();
}
