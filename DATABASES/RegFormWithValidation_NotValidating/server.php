<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 08/08/2018
 * Time: 12:37
 */
//connect to db
session_start();
$name='';
$address='';
$continent='';
$id=0;
$edit_state=false;
$db= mysqli_connect('localhost','root','','crud');
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $continent=$_POST['continent'];

    $query="INSERT INTO person(name, address, continent) values('$name','$address','$continent')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Address saved";
    header('location: InsertUpdateDelete.php');

}

    if(isset($_POST['update'])) {
    $name=mysqli_real_escape_string(  $db, $_POST['name']);
    $address=mysqli_real_escape_string(  $db, $_POST['address']);
    $continent=mysqli_real_escape_string(  $db, $_POST['continent']);
    $id=mysqli_real_escape_string(  $db, $_POST['id']);

    mysqli_query($db,"UPDATE person SET name='$name', address='$address', continent='$continent' WHERE id=$id");
    $_SESSION['msg']="Address updated";
    header('location: InsertUpdateDelete.php');



    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM person WHERE id=$id");
        $_SESSION['msg'] = "Address deleted!";
        header('location: InsertUpdateDelete.php');
    }

$results= mysqli_query($db,"SELECT * FROM person");