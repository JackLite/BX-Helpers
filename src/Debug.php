<?php

namespace JackLite\BX;

/**
 * Class Debug
 * @package JackLite\BX
 */
class Debug
{
    /**
     * @param $checkAdmin
     * @return bool
     */
    private static function check($checkAdmin) {
        global $USER;
        if(!$USER instanceof \CUser) {
            return false;
        }
        if($USER->IsAdmin() || $checkAdmin == false) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $arr
     * @param bool $isDie
     * @param bool $checkAdmin
     */
    public static function print_r($arr, $isDie = false, $checkAdmin = true) {
        if(self::check($checkAdmin)) {
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            if($isDie) die;
        }
    }

    /**
     * @param $arr
     * @param bool $isDie
     * @param bool $checkAdmin
     */
    public static function dump($arr, $isDie = false, $checkAdmin = true) {
        if(self::check($checkAdmin)) {
            echo "<pre>";
            var_dump($arr);
            echo "</pre>";
            if($isDie) die;
        }
    }
}