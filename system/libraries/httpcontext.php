<?php

namespace Particle\System\Libraries;

/**
 * Class HttpContext
 * Encapsulate http context.
 * @package Particle\System\Libraries
 */
class HttpContext
{
    /**
     * @var \Particle\System\Libraries\HttpRequest
     */
    public $request;
    /**
     * @var \Particle\System\Libraries\HttpResponse
     */
    public $response;

    /**
     * Initialize a new instance of HttpContext.
     * @param HttpRequest $request
     * @param HttpResponse $response
     */
    public function __construct(HttpRequest $request, HttpResponse $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

}