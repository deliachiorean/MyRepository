<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 16:58
 */


function f()
    {
        $sum = 0;
        $n = 0;
        for($i = 0; $i < func_num_args();$i++)
        {
            if((int)func_get_arg($i))
            {
                $sum+=func_get_arg($i);
                $n++;
            }
        }
        echo $sum /$n;
    }

 f(1, 'dsfsdf', 2,'fsdfsd',4.5,"csca");


//$asa= array(1, 2, "sdabd",1,2,3);
//foreach($asa as $nr) {
//    if (is_numeric($nr))
//        echo "e numar<br>";
//    else echo "is not a nubmer<br>";
//}