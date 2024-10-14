<?php

spl_autoload_register(function ($class): void
{
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';
    if (strncmp($prefix, $class, strlen($prefix)) === 0) {
        $relativeClass = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            throw new Exception("Class {$class} not found. Expected path: {$file}");
        }
    }
});