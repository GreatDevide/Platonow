<?php
namespace platonov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{

    public function _log(string $str)
    {
        $this->log[] = $str;
    }

    public static function log($str)
    {
        self::Instanse()->_log($str);
    }

    public function _write()
    {
        foreach ($this->log as $value) {
            echo $value . "\n";

        }
    }

    public static function write()
    {
        self::Instanse()->_write();
    }
}

?>

