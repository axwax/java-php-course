<?php

function urlExists($url){
    $handle = @fopen($url, 'r');
    return ($handle ? true : false);
}


function getPHPmanual($filename,$phpType = 'function') {
    if (file_exists($filename)) {
        $lines = explode("\n", file_get_contents($filename));
        $funcs = new ArrayIterator($lines);
        foreach($funcs as $func){
            $url = "https://www.php.net/manual/en/$phpType." . trim(strtolower(str_replace("_", "-", $func))) . ".php";
            //echo $func.$url . urlExists($url) . '<br/>';
            if(urlExists($url)) echo '<a href="'.$url.'">' . $func . '</a><br/>';
            else echo $url . '</br>';
        }
    }
}
//getPHPmanual("functions.txt");
//getPHPmanual("splexceptions.txt","class");
//getPHPmanual("interfaces.txt","class");
//getPHPmanual("iterators.txt","class");
getPHPmanual("filemanagement.txt","class");
