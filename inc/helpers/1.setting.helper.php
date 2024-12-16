<?php
class AMINSettingHelper{
    public function get_setting($key){
       return fw_get_db_settings_option($key);
    }
}