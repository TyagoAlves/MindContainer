<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Suppress PHP 8.4+ tempnam() warning (converted to ErrorException)
set_error_handler(function ($severity, $message, $file, $line) {
    if (str_contains($message, 'tempnam')) {
        return true;
    }
    return false;
}, E_WARNING);

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

try {
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    $msg = "Error: " . get_class($e) . ": " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine() . "\nTrace:\n" . $e->getTraceAsString();
    file_put_contents('/tmp/laravel_crash.log', $msg, FILE_APPEND);
    throw $e;
}
