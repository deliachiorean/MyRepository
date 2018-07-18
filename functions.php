<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 16:58
 */


function f ()
{
    $argc = func_get_args();
    $values = array();
    foreach ($args as $ar) {
        if (is_numeric($ar)) {
            array_push($values, $ar);

        }
    }

    $ct = count($values);
    $sum = array_sum($values);
    if ($ct = 0)
        echo "DivisionBy 0: You entered 0 number arguments!";
    else {
        echo $sum / $ct;
    }
}
 f(1, 'dsfsdf', 2,'fsdfsd');


//$asa= array(1, 2, "sdabd",1,2,3);
//foreach($asa as $nr) {
//    if (is_numeric($nr))
//        echo "e numar<br>";
//    else echo "is not a nubmer<br>";
//}