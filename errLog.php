<?php
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler
        return false;
    }

    switch ($errno) {
        case E_USER_ERROR:
            echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
            echo "  Fatal error on line $errline in file $errfile";
            echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
            echo "Aborting...<br />\n";
            exit(1);
            break;

        case E_USER_WARNING:
            echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
            break;

        case E_USER_NOTICE:
            echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
            break;

        default:
            echo "Unknown error type: [$errno] $errstr<br />\n";
            break;
    }

    /* Don't execute PHP internal error handler */
    return true;
}

// function to test the error handling

function checkType($var)
{
    if (!is_numeric($var)) {
        trigger_error("You need to enter a numeric value ", E_USER_NOTICE);

    }
}

function checkValue($var)
{
    if ($var <=100) {
        trigger_error("You need to enter a value grater than 100", E_USER_WARNING);

    }
}

function checkForFatal($array)
{
    foreach( $array as $value ) {
        if( !is_numeric($value))
            trigger_error("All array values need to be numeric ", E_USER_ERROR);

    }
}



// set to the user defined error handler
$old_error_handler = set_error_handler("myErrorHandler");



echo "----value---- daskla<br>";
checkType($value="daksla");

echo"<hr>";
echo "---value--- 99<br>";
checkValue($value=99);

echo"<hr>";


echo "----array ---- 2, 3, 'casdvavs', 5.5, 43.3, 21.11<br> ";
checkForFatal(array(2, 3, "foo", 5.5, 43.3, 21.11));
echo "<hr>";

