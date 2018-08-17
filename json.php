<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 30/07/2018
 * Time: 15:45
 */

   $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));// incepe afisarea cu object(stdClass)#1 (5)
   echo "<hr>";
   ///true means returned object will be converted into associative array
   var_dump(json_decode($json, true));// incepe afisarea cu array(5)


    echo "<hr>";

    $json2 = '{"firstName" : "Rahul", "lastName" : "Kumar", "email" : "rahul@gmail.com"}';
    var_dump(json_decode($json2, true));

    echo "<hr>";

    $myJson='{
        "firstName": "Sonoo",
        "lastName": "Jaiswal",
        "age": 27,
        "address" : {
             "streetAddress": "Plot-6, Mohan Nagar",
             "city": "Ghaziabad",
             "state": "UP",
             "postalCode": "201007"
        },
        "hobby": "chess" }';
    $var=json_decode($myJson, true);
    //var_dump($var);
    foreach ($var as $value) {
        if(is_array($value)){
            foreach ($value as $item)
                echo $item."<br>";
        }else
            echo $value."<br>";
    }
    echo "<hr>";


    $varJSON='{"employee": {"name":"Bob","salary":56000,"comments":"He is a nice man"}}';

    var_dump(json_decode($varJSON, true ));
?>