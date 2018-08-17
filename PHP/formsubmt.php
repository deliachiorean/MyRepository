<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 23/07/2018
 * Time: 10:05
 */



$serverName= "localhost";
$user="root";
$db="mydatabase";
$password="";



$conn= new mysqli($serverName,$user,$password,$db);
if(mysqli_connect_errno()) {
    die("Connection failed" . $conn->connect_error);
}

$nume=$_POST["nume"];

$nume=mysqli_real_escape_string($conn,$nume);


$stmt = $conn->prepare("INSERT INTO  persoane(nume) values(?)");
//$stmt = $conn->prepare("SELECT * FROM  t1(username, password,nume, prenume, varsta) WHERE nume like ?");
$stmt->bind_param('s', $nume); // 's' specifies the variable type => 'string'

$stmt->execute();

echo "New record inserted"."<br>";
$str = 'This is what I inserted: $nume';
eval("\$str = \"$str\";");
echo $str."<br>";
$stmt->close();
$conn->close();

//$val=6;
//function increment(&$val){
//    $val++;
//}
//increment($val);
//
//$str = 'This is what I inserted: $val';
//eval("\$str = \"$str\";");
//echo $str."<br>";