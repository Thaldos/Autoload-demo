<?php

$classPath = dirname(__FILE__) . '/class';

foreach (scandir($classPath) as $filename) {
    $path = $classPath . '/' . $filename;
    if (is_file($path)) {
        require_once $path;
    }
}
