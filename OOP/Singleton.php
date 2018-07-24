<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 14:50
 */

class Singleton
{
    public static function instance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new static();
        }
        return $instance;
    }

    private function __construct(){}

    private function  __clone(){}

    private function  __sleep()
    {
        // TODO: Implement __sleep() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}


class AAA extends Singleton{
    protected $label;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

}


$a=AAA::instance();
$a->setLabel("AAA");
echo $a->getLabel().PHP_EOL;

$b = AAA::instance();
echo $b->getLabel() . PHP_EOL; // AAA

$b->setLabel("BBB");
echo $a->getLabel() . PHP_EOL; // BBB
echo $b->getLabel() . PHP_EOL;