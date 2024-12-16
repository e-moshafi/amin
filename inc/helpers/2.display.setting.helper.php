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
        $option = $this->get_field('display_settings_amin_display_top_bar');
        return $option == 'on';
    }
}
function NEWAMINDisplaySetting()
{
    return new AMINDisplaySettingHelper();
}
