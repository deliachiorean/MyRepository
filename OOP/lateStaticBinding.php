<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 25/07/2018
 * Time: 15:20
 */
class AClass {
    public static function foo() {
        static::who();
        echo "i\'m in a";
        echo "<br>";
    }

    public static function who() {
        echo __CLASS__."<br>";
        echo "i\'m in a";
        echo "<br>";}
}

class BClass extends AClass {
    public static function test() {
        AClass::foo();
        //echo "i\'m in b";
        echo "<br><br>";

        parent::foo();// clasa parent va fi clasa C
        //echo "i\'m in b";
        echo "<br><br>";

        self::foo();// clasa self va fi clasa C
        //echo "i\'m in b";
        echo "<br><br>";}

    public static function who() {//nu se apleaza
        echo __CLASS__."<br>";
        //echo "i\'m in b";
        echo "<br>";
    }
}
class CClass extends BClass {
    public static function who() {
        echo __CLASS__."<br>";
        echo "i\'m in c";echo "<br>";
    }
}

CClass::test();


//AClass
//i\'m in a
//i\'m in a
//
//
//CClass
//i\'m in c
//i\'m in a
//
//
//CClass
//i\'m in c
//i\'m in a

