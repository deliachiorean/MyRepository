<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 11:31
 */

class Human
{
    public $nume;
    public $age;
    public $something;
    public $nrArg;

    public function __construct()
    {
        $arg = func_get_args();
        $nr = func_num_args();
        $GLOBALS["nrArg"] = $nr;
        if (method_exists($this, $f = '__construct' . $nr)) {
            call_user_func_array(array($this, $f), $arg);
        }
    }

    function __construct1($a)
    {
        $this->nume = $a;
    }

    function __construct2($a, $b)
    {
        $this->nume = $a;
        $this->age = $b;
    }

    function __construct3($a, $b, $c)
    {
        $this->nume = $a;
        $this->age = $b;
        $this->something = $c;

    }


    public function __toString()
    {
        $str = "<b>Human:</b> ";
        $str .= " name - ".$this->nume;
        if($this->age!=null)
            $str .= "; age - ".$this->age;
        if($this->something!=null)
            $str .= "; something - ".$this->something;

        return $str.";";


    }
}

$o = new Human('aaa');
echo $o."<br>";
$o = new Human('aaa',15);
echo $o."<br>";
$o = new Human('aaa',16,'pizza');
echo $o."<br>";

