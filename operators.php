<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 09:49
 */

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



$var=$_POST["nrs"];
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