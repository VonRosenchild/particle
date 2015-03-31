<?php

/**
 * Contains framework special folder definition.
 */

define('DS', DIRECTORY_SEPARATOR);
define('PARTICLE_PATH_ROOT', dirname(dirname(__DIR__)));

define('PARTICLE_PATH_SYSTEM', PARTICLE_PATH_ROOT . DS . 'system');
define('PARTICLE_PATH_SYSTEM_CORE', PARTICLE_PATH_SYSTEM . DS . 'core');
define('PARTICLE_PATH_SYSTEM_LIBRARIES', PARTICLE_PATH_SYSTEM . DS . 'libraries');
define('PARTICLE_PATH_SYSTEM_MIDDLEWARE', PARTICLE_PATH_SYSTEM . DS . 'middleware');
define('PARTICLE_PATH_SYSTEM_CONFIGURATIONS', PARTICLE_PATH_SYSTEM . DS . 'configurations');