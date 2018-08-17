<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 25/07/2018
 * Time: 14:31
 */


interface PersonInterface{
    public function doWalk($place);
    public function doAge();

}

abstract  class Person implements  PersonInterface{
    private $age=0;
    public function doAge()
    {
        $this->age=$this->age+1;
    }
    public function doWalk($place)
    {
        echo "I am going to walk to $place <br>";
    }
    abstract function  talk($say);
}

class Copil extends Person{

    function talk($say)
    {
        echo "hello! I am a child and i think :".$say."<br>";
    }
}
class Parinte extends Person{

    function talk($say)
    {
        echo "hello! I am a parent and i think :".$say."<br>";
    }

    public function doWalk($place){
        echo "I'm going home, to this place: $place <br>";
    }
}


$people= array( new Copil(), new Parinte());
foreach ($people as $p){
    $p->doWalk("New York");
    $p->talk("PHP is awesome! ");
}