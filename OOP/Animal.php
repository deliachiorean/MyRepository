<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 10:42
 */

class Animal
{
    public $type;
    public $name;
    public $food;

    public function __construct($t,$n,$f)
    {
        $this->food=$f;
        $this->name=$n;
        $this->type=$t;
    }

    public static function compare($a,$b){
        if($a->name < $b->name)
            return -1;
        elseif ($a->name ==$b->name)
            return 0;
        else return 1;
    }

    public function __toString()
    {
        return "\"$this->name\" belongs to \"$this->type\" category and eats \"$this->food\" ";
    }

}

$myAnimal =new Animal("peste","rechin","alti pesti");
echo $myAnimal;
