<?php
use pokemon\lib\ActionBase;
use pokemon\lib\ClassLoader;
require_once __DIR__ . '/../bootstrap.php';
$requestName = basename(parse_url($_SERVER['REQUEST_URI'])['path']);
$actionPath  = realpath(ClassLoader::getRootDirectory() . '/actions/'  . $requestName . '.php');
$viewPath    = str_replace ('actions', 'views', $actionPath);
if (!is_file($actionPath)) {
    header ('HTTP/1.1 404 NotFound');
    exit();
}
if (!is_file($viewPath)) {
    header ('HTTP/1.1 404 NotFound');
    exit();
}
require_once $actionPath;
$actionName = ClassLoader::getNamespaceRoot() . '\\actions\\' . preg_replace( '#\.php$#', '', $requestName);
$action = new $actionName;
if (!($action instanceof ActionBase)) {
    header ('HTTP/1.1 404 NotFound');
    exit();
}
$action->setRequest($_REQUEST);
$response = $action->run();
include $viewPath;

