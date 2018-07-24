<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 10:42
 */

abstract class Animal
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

//$myAnimal =new Animal("peste","rechin","alti pesti");
//echo $myAnimal;
trait Sounds{
    public function makeSound(){
        return "woof";
    }
}

class Dog extends Animal{
    public function __construct( $n,$f)
{
    parent::__construct("dog", $n, $f);
}
    use Sounds;

    public function __toString()
    {
        return parent::__toString()."and says \"".$this->makeSound()."\"";
    }
}

class Fish extends Animal {
    public function __construct($n,$f)
    {
        parent::__construct("Fish", $n, "Other fishes");
    }
}
class Cat extends Animal{
    public function __construct($n,$f)
    {
        parent::__construct("Cat", $n, $f);
    }
}

$mydog1=new Dog("catel","orice");
echo $mydog1."<hr>";

$animals= array( new Dog("Fido","orice"),
                 new Cat("Celeste","lapte"),
                 new Dog("Brad","boabe"),
                 new Fish("Kiki","granule"),
                 new Cat("Abraham","orice"),
                 new Dog("Japi","orice"));

foreach ($animals as $value){
    echo $value."<br>";

}
echo "<hr>Sorted array of animals( by name) <br>";
usort($animals,array("Animal", "compare"));
foreach($animals as $animal) echo "$animal<br>\n";