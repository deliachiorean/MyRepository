<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 25/07/2018
 * Time: 09:52
 */
interface Logger{
    public function log( string $msg);
}
class Application
{
    private $logger;
    public function getLoger():Logger{
        return $this->logger;
    }
    public function  setLogger(Logger $logger){
        $this->logger=$logger;
    }
}
$app= new Application;
$app->setLogger(new class implements Logger{
    public function log(string $msg){
        print($msg);
    }
});
$app->getLoger()->log("My message");

echo "<hr>";


   class Cl{
       function Cl() {
           print('Style Constructor');
       }
   }

   $obj=new Cl();

echo "<hr>";

class fo {
    function bar() {
        echo 'I am not static!';
    }
}

fo::bar();
?>
