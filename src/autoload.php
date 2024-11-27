<?php

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    if ($parts[0] == 'App') {
        array_shift($parts);
    }
    require_once APP_ROOT . implode(DIRECTORY_SEPARATOR, $parts) . '.php';
});
