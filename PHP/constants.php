
<?php
 session_start();

/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 17/07/2018
 * Time: 16:02
 */
const CONSTANT="HelloWorld";
echo CONSTANT."<br>";
const CONSTANT22=256.652;
echo CONSTANT22."<br>";
const CONSTANT2=256;
echo CONSTANT2."<br>";
const CONSTANT3=true;
echo CONSTANT3,"<br>";
Const ConstantArray=array('dog','flower','cat');
echo ConstantArray[2]."<br>";

define ( 'MYCONSTANTARRAY',  array('dog','flower','cat'));
echo MYCONSTANTARRAY[2]."<br>";


$var="capsuna ";

function changeValues($var,$const){
    $var.="rosie";
    $const=21651;

}

changeValues($var,CONSTANT2);
echo $var."<br>".CONSTANT2."<br>";

echo "<br>Constants:"."<br>";
echo PHP_FLOAT_MAX."<br>";
echo PHP_INT_MAX."<br>";
echo PHP_MINOR_VERSION."<br>";
echo PHP_VERSION."<br>";
echo PHP_ZTS."<br>";

function printMagicCts()
{
    echo "<br>Magic Constants:" . "<br>";
    echo __DIR__ . "<br>";
    echo "method is: ".__METHOD__."<br>";
    echo "trait is: ".__TRAIT__ . "<br>";
    echo __FILE__ . "<br>";
    echo __LINE__ . "<br>";
}

printMagicCts();


function printSuperglob()
{
    echo "<hr>print SuperGlobals<br>";
    // echo $GLOBALS."<br>";
    echo $_SERVER["REQUEST_METHOD"]."<br>";
    //echo $_REQUEST."<br>";
    echo $_POST["nume"]."<br>";
    //echo $_GET.["pre"]."<br>";
//    echo $_FILES."<br>";
//    echo $_ENV."<br>";
//    echo $_COOKIE."<br>";
    echo json_encode($_SESSION);
}

printSuperglob();


function varInside(){
    $insideVar=234;
    echo $insideVar;
}

$var=1231;
$newVar= $var + $insideVar;
if($newVar==$var )
    echo "we can't access insideVar!";

else
    echo $newVar."<hr>";

//
//echo 'A $variable_literal that I have'.PHP_EOL.'looks better than'.PHP_EOL;
//echo 'this other $one'."\n";


?>
