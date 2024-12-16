<?PHP
if (!class_exists('App_assets_add_' . $project_name)) {
    class App_assets_add_amin
    {
        public function is_file_assets($file)
        {
            if (empty(trim($file))) return false;
            if (!is_file(trim($file))) return false;
            $file = basename(trim($file));
            $file = explode('.', trim($file));
            $access_file_format = [
                'css',
                'js'
            ];
            if (empty($file) || !in_array(end($file), $access_file_format)) return false;
            return true;
        }
        public function get_dir($dir = __DIR__ . '/assets/template')
        {
            $files = [];
            $remove_array = array('.', '..', 'plugins', 'fonts.css', 'style-jalali.css', 'theme.css');
            if (file_exists($dir) && is_dir($dir)) {
                foreach (array_diff(scandir($dir), $remove_array) as $file) {
                    if (is_dir($dir . "/" . $file)) {
                        $dir_files = $this->get_dir($dir . "/" . $file);
                        if (!empty($dir_files)) {
                            $files = array_merge($files, $dir_files);
                        }
                    } else {
                        if ($this->is_file_assets($dir . "/" . $file)) {
                            $dir_with_out_base_dir = str_replace(__DIR__ . '/', '', $dir);
                            $files[] = $dir_with_out_base_dir . "/" . $file;
                        }
                    }
                }
            }
            return ($files);
        }
        public function run($dir = __DIR__ . '/assets/template')
        {
            global $project_name;
            foreach ($this->get_dir($dir) as $file) {
                $file_name = basename($file);
                $file_format = end(explode('.', trim($file_name)));
                $file_name_without_format = str_replace(['.js', '.css'], ['', ''], $file_name);
                if ($file_format == 'js') {
                    $footer_show = str_contains($file_name_without_format, 'top_header') ? false : true;
                    wp_enqueue_script($project_name . "-" . $file_name_without_format, get_template_directory_uri() . '/' . $file, ['jquery'], false, $footer_show);
                    if (str_contains($file_name_without_format, 'ajax')) {
                        wp_localize_script(
                            $project_name . "-" . $file_name_without_format,
                            //$project_name . "_" . $file_name_without_format,
                            $project_name,
                            array(
                                'ajaxurl' => admin_url('admin-ajax.php'),
                            )
                        );
                    }
                } elseif ($file_format == 'css') {
                    wp_enqueue_style($project_name . $file_name_without_format, get_template_directory_uri() . '/' . $file);
                }
            }
        }
    }
}

if (class_exists('App_assets_add_amin')) {
    add_action('wp_enqueue_scripts', function () {
        (new App_assets_add_amin())->run();
    });
    add_action('admin_enqueue_scripts', function () {
        (new App_assets_add_amin())->run(__DIR__ . '/admin');
    });
}
