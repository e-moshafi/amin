<?php
class AMINContactUsSettingHelper extends AMINSettingHelper
{
    private $option_key = 'contact_us_settings_amin';
    public $Address;
    public $Phone;
    public $Email;
    public $WorkingTime;
    public $LanLon;
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
        $this->GetAddress();
        $this->GetPhone();
        $this->GetEmail();
        $this->GetWorkingTime();
        $this->GetGoogleMapLanLon();
    }
    public function GetAddress()
    {
        $option = $this->get_field($this->option_key . '_address');
        $this->Address = $option;
        return $option;
    }
    public function GetPhone()
    {
        $option = $this->get_field($this->option_key . '_phone');
        $this->Phone = $option;
        return $option;
    }
    public function GetEmail()
    {
        $option = $this->get_field($this->option_key . '_email');
        $this->Email = $option;
        return $option;
    }
    public function GetWorkingTime()
    {
        $option = $this->get_field($this->option_key . '_working_time');
        $this->WorkingTime = $option;
        return $option;
    }
    public function GetGoogleMapApi()
    {
        $option = $this->get_field($this->option_key . '_google_map_api');
        return $option;
    }
    public function GetGoogleMapLanLon()
    {
        $option = $this->get_field($this->option_key . '_google_map_lan_lon');
        $this->LanLon = $option;
        return $option;
    }
}
function NEWAMINContactUsSetting()
{
    return new AMINContactUsSettingHelper();
}
