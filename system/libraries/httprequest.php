<?php

namespace Particle\System\Libraries;

/**
 * Class HttpRequest
 * Encapsulate http request.
 * @package Particle\System\Libraries
 */
class HttpRequest
{
    public $uniqueId;
    public $httpHost;
    public $httpUserAgent;
    public $httpAccept;
    public $httpAcceptLanguage;
    public $httpAcceptEncoding;
    public $httpConnection;
    public $httpCacheControl;
    public $remoteAddress;
    public $scheme;
    public $remotePort;
    public $method;
    public $queryString;
    public $uri;

    /**
     * Initialize a new instance of HttpRequest.
     * This will fetch data from the $_SERVER variable.
     */
    public function __construct()
    {
        $this->uniqueId = $_SERVER['UNIQUE_ID'];
        $this->httpHost = $_SERVER['HTTP_HOST'];
        $this->httpUserAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->httpAccept = $_SERVER['HTTP_ACCEPT'];
        $this->httpAcceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $this->httpAcceptEncoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
        $this->httpConnection = $_SERVER['HTTP_CONNECTION'];
        $this->httpCacheControl = $_SERVER['HTTP_CACHE_CONTROL'];
        $this->remoteAddress = $_SERVER['REMOTE_ADDR'];
        $this->scheme = $_SERVER['REQUEST_SCHEME'];
        $this->remotePort = $_SERVER['REMOTE_PORT'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->queryString = $_SERVER['QUERY_STRING'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }
}