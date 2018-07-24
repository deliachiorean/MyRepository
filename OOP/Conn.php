<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 24/07/2018
 * Time: 15:06
 */

class Conn
{
    public $nume;
    public $prenume;
    public $varsta;

    public function __construct(...$arr)
    {
        if (count($arr) == 1) {
            $this->nume = $arr[0];
        } elseif (count($arr) == 2) {
            $this->nume = $arr[0];
            $this->prenume = $arr[1];
        } elseif (count($arr) == 3) {
            $this->nume = $arr[0];
            $this->prenume = $arr[1];
            $this->varsta = $arr[2];
        } else {
            echo "Nu se poate crea obiectul!!" . "<br>" . "<hr>";
        }
    }

    public function __toString()
    {
        if (!isset($this->prenume) && isset($this->nume)) {
            $str = "Numele este: $this->nume ;";
        } elseif (!isset($this->varsta) && isset($this->nume) && isset($this->prenume)) {
            $str = "Numele este: $this->nume, iar prenumele: $this->prenume ;";
        } elseif (!isset($this->nume)) {
            $str = "";
        } else {
            $str = "Numele este : $this->nume, iar prenumele: $this->prenume, iar varsta: $this->varsta;";
        }
        return $str;

    }
}

$obj1= new Conn("nume","prenume",25);
echo $obj1."<br>";
$obj1= new Conn("nume","prenume");
echo $obj1."<br>";
$obj1= new Conn("nume");
echo $obj1."<br>";
