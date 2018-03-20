<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces([
    'NewsApp\Controllers' => $config->application->controllersDir,
    'NewsApp\Controllers\Admin' => $config->application->controllersDir.'\admin',
    'NewsApp\Controllers\User' => $config->application->controllersDir.'\user',
    'NewsApp\Models' => $config->application->modelsDir,
    'NewsApp\Forms' => $config->application->formsDir,
    // 'NewsApp\Plugins' => $config->application->pluginsDir
]);

$loader->register();