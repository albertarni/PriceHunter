<?php

namespace app\Libraries;

include_once("simple_html_dom.php");


class Scrapter
{
//use curl to get html content
    private static function getHTML($url, $timeout)
    {
        $ch = curl_init($url); // initialize curl with given url
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
        curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
        return @curl_exec($ch);
    }

    public static function getProducts()
    {
        $html = file_get_html("http://www.cel.ro");
        //$html = self::getHTML("http://www.emag.ro", 10);

        foreach($html->find("a") as $element)
            echo $element->href  . '<br>';
    }
}