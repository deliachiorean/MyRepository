<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 17/07/2018
 * Time: 11:49
 */
class Person{
    var $nume;
    var $varsta;

    function __construct($nume, $varsta)
    {$this->nume=$nume;
        $this->varsta=$varsta;
    }

    function getOne(){
        return  "$this->nume , $this->varsta";


    }
}

function checkAge($var){
    if(($var<1 )|| $var>100) {
        return " varsta trebuie sa fie intre 1 si 100";
    }
    return $var;
}

function findNr($sir, $value){
    $cnt=0;
    $var=explode(";",$sir);
    foreach ($var as $n) {
        if($n==$value)
            $cnt+=1;
    }
    return $cnt;

}

function getSir($sir){

    $var=explode(";",$sir);
    return $var;

}

$var=NULL;
echo $var;

$var=isset($_POST["nume"]);
if($var==true){
    $var=$_POST["nume"];
    $name=$var;
    echo "$var<br>";

}
$var=isset($_POST["varsta"]);
if($var==true) {
    $var = $_POST["varsta"];
    $rez = checkAge($var);
    $age=$var;
    echo "$rez<br>";
}
$var=isset($_POST["inaltime"]);
if($var==true) {
    $var = $_POST["inaltime"];
    echo "$var<br>";
}

$var=isset($_POST["cstate"]);
if($var==true) {
    $var=$_POST["cstate"];
    if($var=="yes"){
        echo "casatorit<br>";
    } else {
        echo "necasatorit<br>";
    }
}
$var=isset($_POST["student"]);
if($var==true){
    echo "Student<br>";
}
if(isset($_POST["sir"])&& isset($_POST["nr"])) {
    $var = $_POST["sir"];
    $var1 = $_POST["nr"];
    $rez = findNr($var, $var1);
    echo " numarul $var1 a aparut de $rez ori<br>";
}
$var = fopen("foo", "w");
echo get_resource_type($var) . "\n<br>";


$pers= new Person($name,$age);
$var=$pers->getOne();
echo " persoana adaugata: $var<br>";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
$var="<ul>";
foreach ( $stack as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo " <hr>using push_back : $var";

$rev=array_reverse($stack);
$var="<ul>";
foreach ( $rev as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using array_reverse: $var";

$slice=array_slice($stack,2);
$var="<ul>";
foreach ( $slice as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using array_slice: $var";

sort($stack);

$var="<ul>";
foreach ( $stack as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using sort: $var";

rsort($stack);

$var="<ul>";
foreach ( $stack as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using rsort: $var";

shuffle($stack);

$var="<ul>";
foreach ( $stack as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using shuffle: $var";

$arr=array(1,"icecream","pizza",3,"apple");
$newAr=array_merge($arr,$stack);
$var="<ul>";
foreach ( $newAr as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using merge: $var";


array_pop($newAr);
$var="<ul>";
foreach ( $newAr as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using array_pop: $var<hr>";

$numbers=array(2, 4, 5 ,7 ,9 );
echo "my numbers: ";
foreach ( $numbers as $s)
    echo $s."\n";
echo "<br>using array_sum: sum(numbers)=".array_sum($numbers)."\n";


$fruits = array("orange"=> "orange", "banana"=> "yellow","apple"=> "green", "raspberry"=> "fucshia");
$fruits=array_values($fruits);
$var="<ul>";
foreach ( $fruits as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "<hr>using array_values: $var<hr>";








