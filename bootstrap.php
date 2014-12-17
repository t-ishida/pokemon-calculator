<?php
error_reporting(E_ALL - E_NOTICE);
ini_set('display_errors', 1);
use pokemon\lib\ClassLoader;
require_once __DIR__ . '/lib/ClassLoader.php';
ClassLoader::registerRoot('pokemon', __DIR__);
spl_autoload_register(array('pokemon\lib\ClassLoader', 'load'));
