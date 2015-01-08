<?php
$path = realpath(__DIR__ . '/../bootstrap.php');
require $path;
use pokemon\lib\ActionBase;
use pokemon\lib\ClassLoader;
$requestName = parse_url($_SERVER['REQUEST_URI'])['path'];
$requestName = preg_replace('#(?:^/|/../|\0)#', '', $requestName);
$actionPath  = realpath(ClassLoader::getRootDirectory('pokemon') . '/actions/'  . $requestName . '.php');
if (!is_file($actionPath)) {
    header ('HTTP/1.1 404 NotFound');
    exit();
}
$actionName = 'pokemon\\actions\\' . preg_replace('#\.php$#', '', $requestName);
$actionName = str_replace(DIRECTORY_SEPARATOR, '\\', $actionName);
$action = new $actionName;
if (!($action instanceof ActionBase)) {
    header ('HTTP/1.1 404 NotFound');
    exit();
}
$action->setRequest($_REQUEST);
try {
    $response = $action->run();
    foreach($response->getHeaders() as $header) header($header);
    echo $response->getContents();
} catch (\Exception $e) {
    echo 'fatal error!' . $e->getMessage();
}
