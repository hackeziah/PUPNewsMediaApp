<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces([
    'NewsApp\Controllers' => $config->application->controllersDir,
    'NewsApp\Models' => $config->application->modelsDir,
    'NewsApp\Forms' => $config->application->formsDir
]);

$loader->register();