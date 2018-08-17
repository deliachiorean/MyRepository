
<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 15:00
 */


$foo = 'andjasasdfka';

$color = 'green';
$fruit = 'apple';

$array= array();
array_push($array,$color,$fruit,'carrot','banana');

function printall( array $myArray){
    foreach ($myArray as $value)
        echo "$value&nbsp";
}

printall($array);

$var=2;
$VAR=3;
echo "$var$VAR<hr>";

$entry = array(
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => ''
);

print_r(array_filter($entry));

echo "<hr>helloworl<hr>";


$arr=array("a", 1=>"b", 3=>"c","d");

echo $arr[4];