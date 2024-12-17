<?php
class AMINGenralSettingHelper extends AMINSettingHelper{
    private $option_key = 'general_amin';
    public function __construct()
    {
        $this->settings = $this->get_settings($this->option_key);
    }
    public function get_link_social($social){
        $option = $this->get_field($this->option_key . '_'.$social);
        return $option;
    }
}
function NEWAMINGenralSettingHelper()
{
    return new AMINGenralSettingHelper();
}
