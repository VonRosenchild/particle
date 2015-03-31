<?php

namespace Particle\System\Libraries;

/**
 * Class Middleware
 * A middleware that will be called by the application.
 * @package Particle\System\Libraries
 */
abstract class Middleware
{
    /**
     * Initialize a new instance of a middleware
     */
    protected function __construct()
    {

    }

    /**
     * Execute the middleware.
     * @param HttpContext $httpContext Http context handled by the application.
     * @return bool True to execute next middleware, false otherwise.
     */
    public abstract function run($httpContext);
}