
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


echo "helloworl";

