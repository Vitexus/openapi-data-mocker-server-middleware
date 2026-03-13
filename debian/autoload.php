<?php
declare(strict_types=1);
spl_autoload_register(function ($class): void {
    $prefix = 'OpenAPIServer\\';
    if (str_starts_with($class, $prefix)) {
        $baseDir = '/usr/share/php/OpenAPIServer';
        $relativeClass = substr($class, \strlen($prefix));
        $file = $baseDir . '/' . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) { require $file; }
    }
});
