<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 16:36
 */

class AA {
    protected static $a;

    public static function init($value) { self::$a = $value; }
    public static function getA() { return self::$a; }
}

class BB extends AA {
    protected static $a; // redefine $a for own use

    // inherit the init() method
    public static function getA() { return self::$a; }
}

BB::init('lala');
echo 'AA::$a = '.AA::getA().'; BB::$a = '.BB::getA();