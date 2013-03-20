<?php

namespace Crawler\Request;

/**
 * PHP version 5.3+
 * CrawlerRequest handles each
 * http Request uses normal file_get_contents method.
 * Note:- Inherits CrawlerRequestAbstract
 *
 * @author    Ravi Shanker B
 * @package   WebCrawler
 */
use Crawler\Request\RequestAbstract;

class RequestRegular extends RequestAbstract{

    /*
     * Sets web crawler with
     *
     * @param string $uri   URL
     * @return array $links all links as an array
     */
    public function getLinks($url){

        //for ssl
        $ctx = stream_context_create(
            array(
              'http'=>array(
                'header'=>"Content-type: application/x-www-form-urlencoded",
              )
            )
          );

        $HTML = file_get_contents($url,0,$ctx);
        $doc = new \DOMDocument();
        @$doc->loadHTML($HTML);
        $links = array();
        foreach ($doc->getElementsByTagName('a') as $element) {
            if ($element->hasAttribute('href')) {
                $links[] = $element->getAttribute('href');
            }
        }
        return $links;
    }
    
}