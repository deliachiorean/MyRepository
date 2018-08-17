<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 31/07/2018
 * Time: 09:49
 */
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}