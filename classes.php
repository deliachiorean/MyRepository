<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 19/07/2018
 * Time: 15:04
 */

class myClass{
    function __construct() {
        print "Sunt în constructor.\n";
        $this->name = "MyClass";
    }

    function __destruct() {
        print "Destructor" . $this->name . "\n";
    }
}

$obj = new myClass();