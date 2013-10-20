<?php
//ini_set('display_errors', 0);
//error_reporting(0);
set_time_limit(220);


//Line Break
if (PHP_SAPI === 'cli'){
    //if run from command line
    $br = PHP_EOL;
}
else{
    //if run from browser
    $br = "<br/>";
}

use \Crawler\WebCrawler as WebCrawler;

$crawler = WebCrawler::getInstance();

//Crawler for aplopio
$crawler->beginCrawl("http://www.aplopio.com/");

$aplopio = $crawler->getWebPages();

foreach ($aplopio as $url => $properties) {
    echo $url . $br;
}


//autoload of classes
function __autoload($className) {
    $filename = $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
