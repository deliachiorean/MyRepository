<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 09:49
 */

$m=1;
$mm="1";
//if($m=$mm) echo "first";
if($m==$mm) echo "equal";
if($m===$mm) echo "perfectly identical";


echo $m**$mm."<hr>";


$a=($b=4)+3;
echo "a= ".$a."<br>"."b=". $b."<hr>";

$var=10;
while($var!=0){
    if($a>$b){
        $b+=1;
    }
    else{
        $a+=1;
    }
    $var-=1;
}
echo "a= ".$a."<br>"."b=". $b."<hr>";

function incb($a,$b){
    if($a===$b) {
        while ($a != $b) {
            if ($a < b)
                $a++;
            else $b++;
        }
    }
    else
        echo "a and must have the same type";
}
echo incb(12,"casa")."<hr>";

function f2($var){
    $var*=$var;
    return $var;

}

echo f2(12)."<hr>";

function greater($a,$b){
    if($a>$b)
        return $a;
    return $b;

}

function lessThen($a,$b){
    if($a<$b)
        return $a;
    return $b;
}

echo greater("dasd","vxcxv")."<hr>";
echo greater(1231,"vxcxv")."<hr>";
echo lessThen(432,"vxcxv")."<hr>";
echo lessThen("dasd","vxcxv")."<hr>";

function fand($a,$b)
{
    if (($a > 10) and ($b > 10)) {
        return "both are > 10";
    } else{
        if (($a <= 10) and ($b <= 10))
            return "they are both < 10;";
        else
            return "one of them is < 10";


}
}

echo fand(22,44)."<br>";
echo fand(5,22)."<hr>";



$var="1,4,7,8";
//echo $var;
$n=explode(",",$var);
$result=array();

foreach($n as $value){
    if((int)$value %2==0)
        array_push($result,$value);

}

$var="<ul>";
foreach ( $result as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "Numerele pare dintre cele introduse sunt : $var"."<hr>";


$x=2;
function f(&$x){
    return $x++;
}
echo $x."<br>";
f($x);
echo  "new: ".$x."<hr>";


////op precedence

$a=3;
$b=4;
$c=5;

echo $a+$b *$c."<br>";
echo ($a+$b) * $c."<br>";

echo ($a-$b )/$c."<br>";
echo $a-$b /$c."<hr>";


function comp($a,$b)   {
    if(($a>5) and ($b <5))
        return 1;
    else return -1;



}

function comp2($a,$b)   {
    if(($a>5) xor ($b <5))
        return 1;
    else return -1;



}

$rez=comp($a,$b);
echo $rez."<br>";

$rez=comp2($a,$b);
echo $rez."<hr>";


function Fc($v) {echo $v." "; return false;}
function T($v) {echo $v." "; return true;}

IF ((Fc(0) || T(1) ) && (Fc(2)  || T(3))  || Fc(4) ) {
    echo "true";
} else echo " false";


echo "<hr>";

$a=array(1,3);
$b= array(12,"shdl",3,"dakjkuh");
$d= array(12,"shdl",3,"dakjkuh");
 $c=$a+$b;


foreach ( $a as $s)
    echo $s." ";

echo "<br>";
foreach ( $b as $s)
    echo $s." ";
echo "<br>";
$var="<ul>";
foreach ( $c as $s)
    $var.="<li>$s</li>";
$var.="</ul>";
echo "noul sir este: (a+b) $var"."<hr>";


if($a===$b)
    echo "sunt la fel <hr>";
else
    echo "nu sunt la fel<br>";
if($d===$b)
    echo "sunt la fel <hr>";
else
    echo "nu sunt la fel";

if($d!==$b )
    echo "not identical<hr>";
else echo "identical<hr>";

function foo(){
    return true;
}
echo "AND<hr>";
$myvar=false && foo();
if($myvar==true){ echo  "rez is true";}
else
echo "rez is : false";
echo "<hr>";
$myvar=true && foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";

echo "<hr>";
$myvar=false and foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";
echo "<hr>";
$myvar=true and foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";
echo "<hr>";
echo "AND<hr>";
$myvar=false || foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";
echo "<hr>";
$myvar=true || foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";

echo "<hr>";
$myvar=false or foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";
echo "<hr>";
$myvar=true or foo();
if($myvar==true){ echo  "rez is true";}
else
    echo "rez is : false";





