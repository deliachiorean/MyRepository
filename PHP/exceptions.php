<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 18/07/2018
 * Time: 16:36
 */


function asdf()
{
    try {
        throw new Exception('error');
    }
    catch(Exception $e) {
        echo "An error occurred";
        throw $e;
    }
    finally {

         "<br>Exception erased";
        //return "<br>Exception erased";
    }
}

try {
    echo asdf();
}
catch(Exception $e) {
    echo "<br>Result: " . $e->getMessage()."<hr>";
}




class MyException extends Exception { }

class Test {
    public function testing() {
        try {
            try {
                throw new MyException("an exception has been thrown!");
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();

echo "<hr>";

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
} finally {
    echo "First finally.<br>";
}

try {
    echo inverse(0) . "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
} finally {
    echo "Second finally.<br>";
}

// Continue execution
echo "Hello World<br>";