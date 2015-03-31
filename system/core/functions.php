<?php

/**
 * Commonly used functions by the system.
 */

/**
 * Extract the class name portion from a namespace.
 * @param string $namespace namespace.
 * @return string
 */
function extractNamespaceClass($namespace)
{
    $segments = extractNamespaceSegments($namespace);
    $end = end($segments);
    reset($segments);
    return $end;
}

/**
 * Replace a namespace backslash to forward slash.
 * @param string $namespace namespace.
 * @return string
 */
function reverseNamespaceSlash($namespace)
{
    return str_replace('\\', '/', $namespace);
}

/**
 * Get segments from a namespace.
 * @param string $namespace namespace.
 * @return array
 */
function extractNamespaceSegments($namespace)
{
    return explode('\\', $namespace);
}

/**
 * Remove identifier from a namespace. Identifier is usually a
 * publisher name or the author name which is not written on the directory
 * structure.
 * @param string $namespace namespace.
 * @return array
 */
function removeNamespaceIdentifier($namespace)
{
    $copy = extractNamespaceSegments($namespace);
    array_shift($copy);
    return $copy;
}

/**
 * Register a directory which files will be called for autoload resolution.
 * @param string $directory Directory that contains the class for autoloading.
 * @param string $filePrefix Prefix for the file.
 * @param string $fileSuffix Suffix for the file.
 */
function registerAutoloadDirectory($directory, $filePrefix = '', $fileSuffix = '')
{
    spl_autoload_register(function ($namespace) use ($directory, $filePrefix, $fileSuffix) {
        // Particle use lower case file naming, this reduce conflicts in case-sensitive OS.
        $className = strtolower(extractNamespaceClass($namespace));
        if (file_exists($file = $directory . DS . $filePrefix . $className . $fileSuffix . '.php')) {
            require_once $file;
        }
    });
}