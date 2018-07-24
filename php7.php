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
?>