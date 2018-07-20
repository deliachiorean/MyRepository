<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 15:13
 */


$serverName= "localhost";
$user="root";
$password="";
$db="mydatabase";


$connection=new mysqli($serverName,$user,$password,$db);
if($connection->connect_error) {
    die("Connection failed" . $connection->connect_error);
}


//    if($_POST['s']){
//        $nume=$_POST['nume'];
$sql="select * from t1 where nume='nume1' or 1=1";

$result= $connection->query($sql);
echo "~~~~~~With mysqli ~~~~~~";
echo "<table border='solid, black, 1px'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nume</th>";
echo "<th>prenume</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "<th>varsta</th>";
echo "</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nume"] . "</td>";
    echo "<td>" . $row["prenume"] . "</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>" . $row["varsta"] . "</td>";
}
echo "</table>";
$connection->close();





?>