<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 23/07/2018
 * Time: 16:52
 */


function serialize_array(&$array, $root = '$root', $depth = 0)
{
    $items = array();

    foreach($array as $key => &$value)
    {
        if(is_array($value))
        {
            serialize_array($value, $root . '[\'' . $key . '\']', $depth + 1);
        }
        else
        {
            $items[$key] = $value;
        }
    }

    if(count($items) > 0)
    {
        echo $root . ' = array(';

        $prefix = '';
        foreach($items as $key => &$value)
        {
            echo $prefix . '\'' . $key . '\' => \'' . addslashes($value) . '\'';
            $prefix = ', ';
        }

        echo ');' . "\n";
    }
}

$arr=array(1,2,3,"cndncs","cviosdjv",4,2);
serialize_array($arr);
//output :  $root = array('0' => '1', '1' => '2', '2' => '3', '3' => 'cndncs', '4' => 'cviosdjv', '5' => '4', '6' => '2');


echo "<hr>";
echo 1 <=> 1; // 0pt egal
echo "<br>";
echo 1 <=> 2; // -1 pentru stanga mai < decat dreapta
echo "<br>";
echo 2 <=> 1; // 1 pt stanga > ca dreapta
echo "<br>";
// Floats
echo 1.5 <=> 1.5; // 0
echo "<br>";
echo 1.5 <=> 2.5; // -1
echo "<br>";
echo 2.5 <=> 1.5; // 1
echo "<br>";
// Strings
echo "a" <=> "a"; // 0
echo "<br>";
echo "a" <=> "b"; // -1
echo "<br>";
echo "b" <=> "a"; // 1
echo "<hr>";




function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}


foreach ((arraysSum([1,2,3], [4,5,6], [7,8,9])) as $value){
    echo $value."<br>";
}