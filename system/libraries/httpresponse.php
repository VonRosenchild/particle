<?php

namespace Particle\System\Libraries;

/**
 * Class HttpResponse
 * Encapsulate http response.
 * @package Particle\System\Libraries
 */
class HttpResponse
{
    /**
     * Initialize a new instance of HttpResponse.
     */
    public function __construct()
    {

    }

    /**
     * Write a string to the output.
     * @param string $string
     */
    public function write($string)
    {
        echo $string;
    }

    /**
     * Write a file to the output. If the file is interpretable,
     * it will be interpreted. Use writeRawFile to output raw file
     * without interpretation.
     * @param string $file Path to the file to output.
     */
    public function writeFile($file)
    {
        require_once $file;
    }

    /**
     * Write a file to the output without interpretation.
     * @param string $file Path to the file to output.
     */
    public function writeRawFile($file){
        $contents = file_get_contents($file);
        echo $contents;
    }

    /**
     * Set a response header.
     * @param string $key Header name.
     * @param string $value Header value.
     */
    public function header($key, $value)
    {
        header($key . ': ' . $value);
    }

    /**
     * Set a response code.
     * @param number $httpCode Http code.
     * @param string $httpMessage Http code message.
     */
    public function code($httpCode, $httpMessage = '')
    {
        header('HTTP/1.1 ' . $httpCode . ' ' . $httpMessage);
    }

}