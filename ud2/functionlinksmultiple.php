<?php

class MyFilterIterator extends FilterIterator {
    public function accept() {
        $fn = $this->current()->getFilename();
        if(strlen($fn)<4) return false;
        if(stripos($fn,".txt",-4)){
            return true;
        }
        return false;
    }
}

function urlExists($url){
    $handle = @fopen($url, 'r');
    return ($handle ? true : false);
}

$dirItr    = new DirectoryIterator('./');
$filterItr = new MyFilterIterator($dirItr);
$itr       = new IteratorIterator($filterItr);

foreach ($itr as $filePath => $fileInfo) {
    if (file_exists($fileInfo->getFilename())) {
        $lines = explode("\n", file_get_contents($fileInfo->getFilename()));
        $funcs = new ArrayIterator($lines);
        foreach($funcs as $func){
            $url = 'https://www.php.net/manual/en/function.' . trim(strtolower(str_replace('_', '-', $func))) . '.php';
            //echo $func.$url . urlExists($url) . '<br/>';
            if(urlExists($url)) echo '<a href="'.$url.'">' . $func . '</a><br/>';
            else echo $url . '</br>';
        }
    }
}