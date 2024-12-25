<?php
class AminBasicTools
{
    public function TimeDisplay($timeSecond)
    {
        if (!is_int($timeSecond)) return false;
        if ($timeSecond == 0) return false;
        $time = $timeSecond;
        if ($time < 60) {
            $text = __('Sec', 'amin');
            return $time . ' ' . $text;
        }
        $time = floor(($time / 60));
        if ($time >= 1 && $time < 60) {
            $text = __('Min', 'amin');
            return $time . ' ' . $text;
        }
        $time = floor(($time / 60));
        if ($time >= 1 && $time < 24) {
            $text = __('Hr', 'amin');
            return $time . ' ' . $text;
        }
        $time = floor(($time / 24));
        if ($time <= 7) {
            $text = __('Day', 'amin');
            return $time . ' ' . $text;
        }
        if ($time < 30) {
            $text = __('Week', 'amin');
            return floor(($time / 7)) . ' ' . $text;
        }
        if ($time >= 30 && $time < 365) {
            $text = __('Mo', 'amin');
            return floor(($time / 30)) . ' ' . $text;
        }
        $time = floor(($time / 365));
        if ($time >= 1) {
            $text = __('Yr', 'amin');
            return $time . ' ' . $text;
        }
    }
}
function NewAminBasicTools()
{
    return new AminBasicTools();
}
