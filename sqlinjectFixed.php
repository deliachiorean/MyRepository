<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 17:09
 */


$serverName= "localhost";
$user="root";
$db="mydatabase";
$password="";


$conn= mysqli_connect($serverName,$user,$password,$db);
if(mysqli_connect_errno()) {
    die("Connection failed" . mysqli_connect_error());
}




        $param = " 'nume1' or 1=1";
        $param = mysqli_real_escape_string($conn,$param);

        echo $param;
        $sql = "select * from t1 where nume=$param";

        $result = $conn->query($sql);
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
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nume"] . "</td>";
            echo "<td>" . $row["prenume"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["varsta"] . "</td>";
        }
        echo "</table>";
        $conn->close();
