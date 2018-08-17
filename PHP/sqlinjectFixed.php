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


$conn= new mysqli($serverName,$user,$password,$db);
if(mysqli_connect_errno()) {
    die("Connection failed" . $conn->connect_error);
}

$username="username";
$pass="passw";
$nume="name";$nume=mysqli_real_escape_string($conn,$nume);
$prenume= "prenume";
$varsta=35;

$stmt = $conn->prepare("INSERT INTO  t1(username, password,nume, prenume, varsta) values(?,?,?,?,?)");
//$stmt = $conn->prepare("SELECT * FROM  t1(username, password,nume, prenume, varsta) WHERE nume like ?");
$stmt->bind_param('ssssd', $username,$pass,$nume,$prenume,$varsta); // 's' specifies the variable type => 'string'

$stmt->execute();

echo "New records inserted";
$stmt->close();
$conn->close();
?>


<?php
//    This example fetches data based on a key value supplied by a form. The user input is automatically quoted, so there is no risk of a SQL injection attack.-->

//$stmt = $dbh->prepare("SELECT * FROM REGISTRY where name = ?");
//if ($stmt->execute(array($_GET['name']))) {
//    while ($row = $stmt->fetch()) {
//        print_r($row);
//    }
//}
//?>