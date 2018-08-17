<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 25/07/2018
 * Time: 15:49
 */

interface Movie{
    public function __construct($name);
    public function  desc();
    public function getName();

}

class ActionMovie implements  Movie{
    protected $name=null;

    public function __construct($name)
    {
       $this->name=$name;
    }

    public function desc()
    {
        echo "This is an action movie!";
    }

    public function getName()
    {
        echo $this->name;
}
}

class AdventureMovie implements Movie{


    protected $name=null;
    public function __construct($name)
    {
       $this->name=$name;
    }

    public function desc()
    {
        echo "This is an adventure movie!";
    }

    public function getName()
    {
       echo  $this->name;
    }
}

$movies= array();
array_push( $movies,new ActionMovie("Movie1"), new ActionMovie("Movie2"), new AdventureMovie("Movie 100"), new AdventureMovie("Movie 101"));

foreach ($movies as $item) {
    $str="";
    $str.=$item->getName();

    $str.=$item->desc();
    $str.="<br>";


    echo $str;


}

