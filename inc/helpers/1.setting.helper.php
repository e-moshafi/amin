<?php
class AMINSettingHelper
{
    public $settings = [];
    public function get_settings($key)
    {
        $settings = get_option($key);
        $this->settings = $settings;
        return $settings;
    }
    public function get_field($id, $default = false)
    {
        if (isset($this->settings[$id])) {
            return $this->settings[$id];
        }
        return $default;
    }
}
