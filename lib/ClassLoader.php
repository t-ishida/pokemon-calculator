<?php
namespace pokemon\lib;
class ClassLoader
{
    private static $namespaceRoot = array();
    public static function registerRoot ($namespaceRoot, $rootDirectory)
    {
        self::$namespaceRoot[$namespaceRoot] = $rootDirectory;
    }

    public static function load ($class)
    {
        if (class_exists($class, false)) {
            return true;
        }
        $path = self::convertFilePath($class);
        if (!is_file($path)) {
            throw new \InvalidArgumentException('undefined class:' . $class);
        }
        require $path;
    }

    /**
     * @param $key
     * @return null
     */
    public static function getRootDirectory($key)
    {
        return self::$namespaceRoot[$key];
    }

    /**
     * @return null
     */
    public static function getNamespaceRoot()
    {
        return self::$namespaceRoot;
    }

    /**
     * @param $class
     * @return string
     */
    public static function convertFilePath($class)
    {
        $path = null;
        foreach (self::$namespaceRoot as $key => $val) {
            if (strpos($class, $key . '\\') === 0) {
                $count = 1;
                $path = str_replace($key, $val, $class, $count);
                break;
            }
        }
        if ($path === null) {
            $path = $class;
        }
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path) . '.php';
        return $path;
    }
}