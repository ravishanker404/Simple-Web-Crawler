Web Crawler - RecruiterBox
============================

This is a simple web crawler written in **`PHP`**.

**Note:-** Minimum requirements are PHP 5.3+

Please run the `index.php` in command line or browser.

The application lists out `20` URLs by default.
Edit the value to a higher by `$crawler->setLinksAllowed(Your Value)`.

 - The Crawler uses a main controller class `Crawler/WebCrawler.php`.
 - The class `Crawler/Request/RequestAbstract.php` is responsible for handling each request and parsing the request. This class is `abstract` to let us use new methods of requests to send the request in future. Eg-cURL, Simple DOM HTML, etc.
 - The class `Crawler/Request/RequestRegular.php` inherits `Crawler/Request/RequestAbstract.php` and uses the default `file_get_content` and `DOMelement` object to get and parse the links respectively.
 - The object `Crawler/WebPage/Webpage.php` holds the complete property of each page (or URL.). To let add new properties like title and other details.


**Note:-** Edit the `set_time_limit(220);` to a higher value when running in browser after exceeding the LinksAllowed value. The first two lines can be uncommented to set in production mode.