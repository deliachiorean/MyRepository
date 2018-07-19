<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 19/07/2018
 * Time: 15:05
 */

function mkdir_r($dirName, $rights=0777){
    $dirs = explode('/', $dirName);
    $dir='';
    foreach ($dirs as $part) {
        $dir.=$part.'/';
        if (!is_dir($dir) && strlen($dir)>0)
            mkdir($dir, $rights);
    }
}
 if(!file_exists("mynewFolder"))
     mkdir_r("mynewFolder",0777);
if(!file_exists("myFolder"))
    mkdir("myFolder",0777);
//touch("fiel1.txt");
if(file_exists("myFolder")) {
    chdir("myFolder");
    for ($i = 0; $i < 3; $i++) {

        touch("file" . $i . ".txt");
    }
}


    for ($i = 0; $i < 3; $i++) {
        $myFileName="file" . $i . ".txt";

        if(file_exists($myFileName)) {
            $myFile = fopen($myFileName, "wr") or die("Unable to open file!");
            $txt = "some text here blahblahab";
            fwrite($myFile, $txt);
            fclose($myFile);
        }
    }


    for ($i = 0; $i < 3; $i++) {
        $myFileName="file" . $i . ".txt";

        if ($i < 2) {
            if (file_exists($myFileName)){
                rename($myFileName, "fisier" . $i . ".txt");
            //echo "succes for file $myFileName<br>";
            }
        }
        if ($i == 2)
            if (file_exists($myFileName)) {
                unlink($myFileName);
                //echo "succes unlinking file $myFileName<br>";
            }
    }

    for ($i = 0; $i < 2; $i++) {
        $myFileName="fisier" . $i . ".txt";

        chmod($myFileName,0644);
        //echo "succes chmod for $myFileName to 0644<br>";


    }

    for ($i = 0; $i < 2; $i++) {
        $myFileName="fisier" . $i . ".txt";

        echo file_get_contents( $myFileName )."<br>";


    }



