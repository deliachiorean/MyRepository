<?php
session_start();
echo "Welcome to the first Page";

$_SESSION["username"]='user1';
$_SESSION["password"]='passcode';
$_SESSION['time']=time();


$sessionfile = fopen("storemySession.txt", "w");
fputs($sessionfile, session_encode( ) );
fclose($sessionfile);

echo '<br/><a href= "sessionpage2.php"> Second page</a>';

