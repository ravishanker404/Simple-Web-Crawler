<?php

namespace Crawler\Request;

/**
 * PHP version 5.3+
 * CrawlerRequest handles each
 * http Request sent, parses all the links
 * and also parses the HTML. Type abstract.
 * 
 *
 * Note (Assumption):- Incase a cURL method needs to be used.
 *                     Uses child method for different types of Requests
 *                     to be sent. eg- normal file_get_contents, file_get_html and cURL.
 *
 * @author    Ravi Shanker B
 * @package   WebCrawler
 */

abstract class RequestAbstract{

    protected static $_instances = array();

    /*
     * Method returns the child's instance
     * Note:- Change the method incase new Request methods are added
     *
     * @return CrawlerRequestAbstract
     */
    public static function getInstance(){
        $class_name = get_called_class();

        return self::$_instances[$class_name] = new static();
    }

    /*
     * Sets web crawler
     *
     * @param string $uri   URL
     * @return array $links all links as an array
     */
    abstract public function getLinks($uri);

}