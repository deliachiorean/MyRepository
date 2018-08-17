<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 15:12
 */

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^E_DEPRECATED);


//notice
echo "aceasta este variabila mea $var"."<br>";
// warning
$file=fopen("welcome.txt","r");

//echo getSir($var)."<hr>";

$a=121;
//echo $a);

$string = "aBBBaCCCADDDaEEEaGGGA";
$chunks = spliti ("a", $string, 5);
print_r($chunks);

//ini_set("error_log", "C:\xampp\htdocs\MyRepository\errorLOG.log");
//error_log( "Hello, errors!", 0 );

