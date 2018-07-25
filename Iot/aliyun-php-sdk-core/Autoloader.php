<?php
namespace Leslie\Iot\Core;

class Autoloader {
    public static function config()
    {
        /**
         * include config.php
         */
        if (!defined("IOT_PATH")) {
            define("IOT_PATH", dirname(__FILE__) . '/');
        }

        include( IOT_PATH . 'Config.php');
    }
}