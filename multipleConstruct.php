<?php

/////////multiple construct-----not working
//Class jucator
//{
//    public $varsta;
//    public $echipa;
//    public $nationalitate;
//    public function __construct()
//    {
//        echo func_get_arg(0);
//        switch (func_num_args()){
//            case 0:
//                $this->__c1(func_get_arg(0));
//                break;
//            case 1:
//                $this->__c2(func_get_arg(0),func_get_arg(1));
//                break;
//            case 2:
//                $this->__c3(func_get_arg(0),func_get_arg(1),func_get_arg(2));
//                break;
//            default:
//                echo "Nu s-a putut realiza crearea obiectului!";
//
//        }
//    }
//    public function __c1($varsta)
//    {
//        $this->varsta = $varsta;
//    }
//    public function __c2($varsta , $echipa)
//    {
//        $this->varsta = $varsta;
//        $this->echipa = $echipa;
//    }
//    public function __c3($varsta,$echipa,$nationalitate)
//    {
//        $this->varsta = $varsta;
//        $this->echipa = $echipa;
//        $this->nationalitate = $nationalitate;
//    }
//    public function __toString()
//    {
//
//        $str = $GLOBALS['newline'] .$this->varsta .$this->echipa .$this->nationalitate;
//        return $str;
//    }
//}
//
//$ob= new jucator(21);
//echo $ob;
//$ob2= new jucator (21,"echipa");
//echo $ob2;
//$ob3= new jucator (21,"echipa","ro");
//echo $ob3;
////////////////
/// ////////////////
/// ///////////////////

class  ABC
{
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct1($a1)
    {
        echo('__construct with 1 param called: '.$a1."<br>");
    }

    function __construct2($a1,$a2)
    {
        echo('__construct with 2 params called: '.$a1.','.$a2."<br>");
    }

    function __construct3($a1,$a2,$a3)
    {
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3."<br>");
    }
}
$o = new ABC('aaa');
$o = new ABC('aaa','bbb');
$o = new ABC('aaa','bbb','ccc');

// results:
// __construct with 1 param called: aaa
//__construct with 2 params called: aaa,bbb
//__construct with 3 params called: aaa,bbb,ccc



