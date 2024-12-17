<?php
global $project_name;
if (!class_exists('App_dir_require_once_' . $project_name)) {
    class App_dir_require_once_amin
    {
        public function is_file_php($file)
        {
            if (empty(trim($file))) return false;
            if (!is_file(trim($file))) return false;
            $file = basename(trim($file));
            $file = explode('.', trim($file));
            if (empty($file) || end($file) != 'php') return false;
            return true;
        }
        private function register_access()
        {
            $access = [];
            $access = [
                [
                    'direction' => __DIR__ . '/plugins',
                    'access' => 'init.php'
                ],
                [
                    'direction' => __DIR__ . '/admin',
                    'access' => 'init.php'
                ],
                [
                    'direction' => __DIR__ . '/Classes',
                    'access' => false
                ],
                [
                    'direction' => __DIR__ . '/helpers',
                    'access' => false
                ],
                [
                    'direction' => __DIR__ . '/hooks',
                    'access' => false
                ],

            ];
            return $access;
        }
        public function get_dir($dir = __DIR__, $single_name = false)
        {
            $files = [];
            $remove_array = array('.', '..');
            if (file_exists($dir)) return $files;
            foreach (array_diff(scandir($dir), $remove_array) as $file) {
                if (is_dir($dir . "/" . $file)) {
                    $dir_files = $this->get_dir($dir . "/" . $file);
                    if (!empty($dir_files)) {
                        $files = array_merge($files, $dir_files);
                    }
                } else {
                    if ($this->is_file_php($dir . "/" . $file)) {
                        if ($single_name) {
                            $files[] = $file;
                        } else {
                            $files[] = $dir . "/" . $file;
                        }
                    }
                }
            }
            return ($files);
        }
        public function get_access_directory($single_name = false)
        {
            $access_dir = $this->register_access();
            $files = [];
            foreach ($access_dir as $dirction) {
                $dir_base = $dirction['direction'];
                $accesses = $dirction['access'];
                if ($accesses === false) {
                    $dir_files = $this->get_dir($dir_base);
                    $files = array_merge($files, $dir_files);
                } else {
                    if (is_string($accesses)) {
                        if ($this->is_file_php($dir_base . "/" . $accesses)) {
                            $files[] = $dir_base . "/" . $accesses;
                        }
                    } elseif (is_array($accesses)) {
                        foreach ($accesses as $access_file) {
                            if (is_dir($dir_base . "/" . $access_file)) {
                                $dir_files = $this->get_dir($dir_base . "/" . $access_file);
                                $files = array_merge($files, $dir_files);
                            } else {
                                if ($this->is_file_php($dir_base . "/" . $access_file)) {
                                    $files[] = $dir_base . "/" . $access_file;
                                }
                            }
                        }
                    }
                }
            }
            return $files;
        }
        public function run(bool $only_access, $dir = __DIR__)
        {
            if ($only_access) {
                $search_dir = $this->get_access_directory();
            } else {
                $search_dir = $this->get_dir($dir);
            }
            foreach ($search_dir as $file) {
                require_once($file);
            }
        }
    }
}


if (class_exists('App_dir_require_once_' . $project_name)) {
    (new App_dir_require_once_amin())->run(true);
}
