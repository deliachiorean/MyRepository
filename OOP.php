<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 23/07/2018
 * Time: 14:46
 */

interface Foo {
    public function doFoo();
}

interface Bar extends Foo {
    public function doBar();
}

class Zip implements Foo {
    public  function doFoo() {
        echo "Foo";
    }
    public function doBar() {
        echo "Bar";
    }
}

$zip = new Zip();
$zip->doFoo();
$zip->doBar();
