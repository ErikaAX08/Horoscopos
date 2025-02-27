<?php

spl_autoload_register(function ($class) {
    // App Namespace
    $prefix = 'App\\';
    // Base route where classes are located
    $base_dir = __DIR__ . '/../';

    // Check if the class uses the base namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // If the class does not belong to the App namespace, it is ignored.
        return;
    }

    // Get the relative name of the class
    $relative_class = substr($class, $len);

    // Replace backslashes with directories and add the .php extension
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Include file if it exists
    if (file_exists($file)) {
        require $file;
    }
});
