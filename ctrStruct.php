<?php


/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 14:18
 */



$numbers=array(2, 4, 5 ,7 ,9 );
echo "my numbers: ";
foreach ( $numbers as $s)
    echo $s."\n";
echo "<br>using array_sum: sum(numbers)=".array_sum($numbers)."\n";

echo "<hr>";

$var= 10;
do{
    echo "current number".$var."<br>";
    $var-=1;
}while ($var>0);
echo "<hr>";

$var= 10;
while ($var>0){
    echo "current number".$var."<br>";
    $var-=1;
};
echo "<hr>";



function fand($a,$b)
{
    if (($a > 10) and ($b > 10)) {
        return "both are > 10";
    } elseif(($a <= 10) and ($b <= 10))
            return "they are both < 10;";
        else
            return "one of them is < 10";
}



echo fand(22,44)." (a=22, b=44)<br>";
echo fand(5,22)." (a=5, b=22)<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo $i."<br>";
}
echo "<hr>";
$v=2;
switch ($v) {
    case 0:
        echo "v equals 0";
        break;
    case 1:
        echo "v equals 1";
        break;
    case 2:
        echo "v equals 2";
        break;
    default:
        echo "v is not equal to 0, 1 or 2";
}
echo "<hr>";
$i = 0;
while ($i++ < 3) {
    echo "one<br />\n";
    while (1) {
        echo "two<br />\n";
        while (1) {
            echo "three<br />\n";
            continue 3;
        }
        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}

$var=5;
echo "<hr>";
while ($var>0){
    echo $var."<br>";
    $var--;
    if($var==2)
        break;
}


include 'vars.php';
echo "<hr>";
echo " A $color $fruit <br>";

echo "<hr>";


require ('vars.php');
echo $foo;
echo "<br>";
for($a=1;$a<=5;$a++){
    echo $foo."<br>";
}

echo "<hr>";
goto a;
echo 'asdasdas';

a:
echo 'lasakslk';