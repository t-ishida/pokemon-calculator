<?php
use pokemon\lib\ClassLoader;

require_once __DIR__ . '/lib/AutLoader.php';
ClassLoader::registerRoot('pokemon', __DIR__);
spl_autoload_register(array('ClassLoader', 'load'));

