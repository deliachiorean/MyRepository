 <?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 14:50
 */

class Singleton
{
    public static function getInstance()
    {
        static $instance = null;
        if (null=== $instance ) {
            $instance = new static();
        }
        return $instance;
    }

    private function __construct(){}

    private function  __clone(){}

    private function  __sleep()
    {
        // TODO: Implement __sleep() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}


class SingletonChild extends Singleton{


}

 $obj = Singleton::getInstance();
 var_dump($obj === Singleton::getInstance());             // bool(true)

 $anotherObj = SingletonChild::getInstance();
 var_dump($anotherObj === Singleton::getInstance());      // bool(false)

 var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)