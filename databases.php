<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 13:46
 */

$serverName= "localhost";
$user="root";
$password="";
$db="mydatabase";


$connection=new mysqli($serverName,$user,$password,$db);
if($connection->connect_error){
    die("Connection failed".$connection->connect_error);

}

$sql="SELECT * FROM t1 ";
$result= $connection->query($sql);
 echo "~~~~~~With mysqli ~~~~~~";
echo "<table border='solid, black, 1px'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nume</th>";
echo "<th>prenume</th>";
echo "<th>varsta</th>";
echo "</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nume"] . "</td>";
    echo "<td>" . $row["prenume"] . "</td>";
    echo "<td>" . $row["varsta"] . "</td>";
}
echo "</table>";
$connection->close();


 echo "~~~~~~With PDO ~~~~~~";

echo "<table border='solid 1px black'>";
echo "<tr><th>id</th><th>nume</th><th>prenume</th><th>varsta</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    $conn = new PDO("mysql:host=$serverName;dbname=mydatabase", $user, $password);

    $sql = "SELECT * FROM t1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $item => $v) {
        echo $v;

    }
}catch (PDOException $exception){
    echo "Error: ". $exception->getMessage();
}
$conn=null;
echo "</table>";

?>
