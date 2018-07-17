<html>
<body>

Welcome

<?php
    $name= $_POST["name"];
    $email=$_POST["email"];
    
    echo "<table border='solid black'><tr><th>Nume</th><th>Email</th></tr><tr><td>$name</td><td>$email</td></tr></table>";

  
?>

<br>
<?php 
$comm=$_POST["comm"];
echo "Your comment: <p>$comm</p>";
?>

<br>

<?php
$options=$_POST["options"];
$opt=explode(";",$options);
$result="<ul>";
foreach ($opt as $value) {
	$result.="<li>";
	$result.=$value;
	$result.="</li>";
}
$result.="</ul>";

echo " Your options : $result";

unset($value);
?>


</body>
</html>