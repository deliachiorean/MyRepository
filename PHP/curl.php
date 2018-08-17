<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 11:38
 */



$ch = curl_init("http://www.example.com/");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);


?>