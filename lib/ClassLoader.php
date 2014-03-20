<?php
namespace pokemon\lib;
class ClassLoader
{
    private static $namespaceRoot = null;
    private static $rootDirectory     = null;
    public static function registerRoot ($namespaceRoot, $rootDirectory)
    {
        self::$namespaceRoot = $namespaceRoot;
        self::$rootDirectory     = $rootDirectory;
    }

    public static function load ($class)
    {
        $matches = null;
        $path = null;
        if (preg_mactch('#^(.+?)\\#',$class, $matches) && self::$namespaceRoot == $matches[1]) {
            $root = self::$namespaceRoot[$matches[1]];
            $path = preg_replace('#^.+\\#', $root, $class);
        }
        $path = strtr('\\', DIRECTORY_SEPARATOR, $path) . '.php';
        if (!is_file($path))
            throw new \InvalidArgumentException('undefined class:' . $class);
        require $path;
    }


    /**
     * @return null
     */
    public static function getNamespaceRoot()
    {
        return self::$namespaceRoot;
    }

    /**
     * @return null
     */
    public static function getRootDirectory()
    {
        return self::$rootDirectory;
    }


}