<?php

session_start();

if(!isset($_COOKIE['lg'])) {
    setcookie('lg', 'ro');
    $_COOKIE['lg'] = 'ro';
}
echo $_COOKIE['lg'];




if(isset($_SESSION["lg"])){
    echo  "language is set to ".$_SESSION["lg"]."<br>";}
else{
    $_SESSION["lg"]="ro";
    echo "<a href='next.php'><br>Click to see if language has been set or not </a>";

}


?>



