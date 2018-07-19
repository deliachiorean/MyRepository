<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 16:58
 */


function f()
    {
        $sum = 0;
        $n = 0;
        for($i = 0; $i < func_num_args();$i++)
        {
            if((int)func_get_arg($i))
            {
                $sum+=func_get_arg($i);
                $n++;
            }
        }
        echo $sum /$n;
    }

 f(1, 'dsfsdf', 2,'fsdfsd',4.5,"csca");

echo '<hr>';
$var=2;$varr=2;
function ff($var,&$varr){
    $var++;
    $varr++;

}


echo "before $var,$varr";
echo '<br>';

ff($var,$varr);

echo "after $var,$varr";
echo '<hr>';




function outsideF($var){


    function insideF($myvar){
        echo  "initialvalue: ".$myvar."<br>";
    }
    insideF($var);
    $var++;
    echo "this is incremented value : $var";


}


outsideF(25);

echo "<hr>";


function MyFunc($content) {

    // The Nested Functions
    function DoThis() {
        return 'Yeah!';
    }
    function DoThat() {
        return 'Nah!';
    }

    // The Main Function Script
    if ($content == 'Yes yes') {
        return DoThis();
    } else {
        return DoThat();
    }

}

// The Main Script
$string = 'Yes yes';

echo MyFunc($string);


echo "<hr>";
function startParty(array $guests, array $food = null,$var=0) {
        foreach ($guests as $items){
            $var++;
            echo $items."<br>";
        }
    }
$guests = array("guest1", "guest12", "guest123", "guest1234");
startParty($guests, null,0);

echo "<hr>";


/// lambda
///

function B($x,$y){
    echo $x+$y();
}

 echo B(3,function(){
     return 3;})."<hr>";


//// constructori
///

class A
{

     function __construct()
    {
        print "Class A constructor\n";
    }

}

class B extends A{
     function __construct()
    {
        parent::__construct();
        print "class B constructor\n";
    }


}

$obj1=new A();
 echo "<br>object A has just been created!<br>";
$obj2=new B();
echo "<br>object B has jus been created!<br>";




