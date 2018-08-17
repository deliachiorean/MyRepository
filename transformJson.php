<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 02/08/2018
 * Time: 10:47
 */




function checkType($var){
    if (is_numeric($var))
        return "N";
    else
        return "S";
}
function transform($input_file,$output_file)
{
    $string = file_get_contents($input_file);//"source.json"
    $json = json_decode($string, true);
    $elems = array();
    $final = array("moments_staging");

    foreach ($json as $value) {
        array_push($elems, array(
            "PutRequest" =>
                array(
                    "Item" => array(
                        "key" => array(checkType($value["key"]) => $value["key"]),
                        "uid" => array(checkType($value["uid"]) => $value["uid"]),
                        "class" => array(checkType($value["class"]) => $value["class"]),
                        "deprecated" => array(checkType($value["deprecated"]) => $value["deprecated"]),
                        "name" => array(checkType($value["name"]) => $value["name"])))));

    }
    $result = array_fill_keys($final, $elems);

    $fp = fopen($output_file, 'w');//'destination.json'
    fwrite($fp, json_encode($result));
    fclose($fp);
    $result = json_encode($result);
    var_dump($result);
}

transform("source.json","destination.json");
