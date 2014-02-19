<?php

namespace Crawler\WebPage;

/**
 * Class to store the property of each
 * Link.
 * Incase the Title, Meta and other propewrties
 * need to be added.
 *
 * PHP version 5.3+
 *
 * @author    Ravi Shanker B
 * @package   WebCrawler
 */

class WebPage {

    private $url;

    public function __construct($url){
        $this->setUrl($url);
    }

    /*
     * @param string $link
     */
    public function getUrl(){
        return $this->url;
    }

    /*
     * Validate the URl and sets the
     * property of it.
     *
     * @param bool
     */
    private function setUrl($url){
        if(filter_var($url, FILTER_VALIDATE_URL) && preg_match("/https?:\/\/\w+/", $url)){
            $this->url = $url;
            return true;
        }
        else{
            return false;
        }
    }
    
}
