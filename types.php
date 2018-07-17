<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 17/07/2018
 * Time: 11:49
 */


function checkAge($var){
    if(($var<1 )|| $var>100) {
        return " varsta trebuie sa fie intre 1 si 100";
    }
    return $var;
}

function findNr($sir, $value){
    $cnt=0;
    $var=explode(";",$sir);
    foreach ($var as $n) {
        if($n==$value)
            $cnt+=1;
    }
    return $cnt;

}

$var=isset($_POST["nume"]);
if($var==true){
    $var=$_POST["nume"];
    echo "$var<br>";

}
$var=isset($_POST["varsta"]);
if($var==true) {
    $var = $_POST["varsta"];
    $rez = checkAge($var);
    echo "$rez<br>";
}
$var=isset($_POST["inaltime"]);
if($var==true) {
    $var = $_POST["inaltime"];
    echo "$var<br>";
}

$var=isset($_POST["cstate"]);
if($var==true) {
    $var=$_POST["cstate"];
    if($var=="yes"){
        echo "casatorit<br>";
    } else {
        echo "necasatorit<br>";
    }
}
$var=isset($_POST["student"]);
if($var==true){
    echo "Student<br>";
}
if(isset($_POST["sir"])&& isset($_POST["nr"])) {
    $var = $_POST["sir"];
    $var1 = $_POST["nr"];
    $rez = findNr($var, $var1);
    echo " numarul $var1 a aparut de $rez ori";
}