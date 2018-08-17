<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 20/07/2018
 * Time: 10:47
 */


session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "language has been set to  " . $_SESSION["lg"] . ".<br>";
?>

</body>
</html>