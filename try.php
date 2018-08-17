<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 02/08/2018
 * Time: 12:11
 */
$string = file_get_contents("dest.json");
$json = json_decode($string, true);

var_dump(json_encode($json));