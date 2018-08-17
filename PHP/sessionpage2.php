<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 13:14
 */

session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION["username"];
echo $_SESSION["password"];
$_SESSION['time']=time();
echo date('Y m d H:i:s', $_SESSION['time']);

// You may want to use SID here, like we did in page1.php
echo '<br /><a href="sessionpage.php">page 1</a>';