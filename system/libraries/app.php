<?php

namespace Particle\System\Libraries;

/**
 * Class App
 * Particle application class.
 * @package Particle\System\Libraries
 */
class App
{
    /**
     * @var Middleware[]
     */
    private $_middleware;

    /**
     * Initialize a new instance of App.
     */
    public function __construct()
    {
        $this->_middleware = array();
    }

    /**
     * Add a middleware to the app.
     * @param Middleware $middleware
     */
    public function addMiddleware(Middleware $middleware)
    {
        array_push($this->_middleware, $middleware);
    }

    /**
     * Run all registered middleware.
     */
    public function run()
    {
        $context = new HttpContext(new HttpRequest(), new HttpResponse());

        foreach ($this->_middleware as $middleware) {
            if (!$middleware->run($context)) {
                break;
            }
        }
    }
}