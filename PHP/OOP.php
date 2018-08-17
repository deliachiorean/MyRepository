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


interface MyInterface{
    public function save($item);
    public function delete($id);

}
trait MyTrait{
    public function printElems(array $myarray){
        foreach ($myarray as $value){
            echo $value."<br>";
        }

    }
}
if(trait_exists('MyTrait')) {

    class MyClass implements MyInterface
    {
        use MyTrait;

        public function save($item)
        {
            // TODO: Implement save() method.
        }

        public function delete($id)
        {
            // TODO: Implement delete() method.
        }


    }
}