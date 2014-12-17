<?php
/**
 * Response.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/16
 * Time: 18:18
 */

namespace pokemon\lib;


class Response {
    public function getHeaders () {
        return array('Content-type:text/html');
    }

    public function getContents () {
        $response = $this;
        $path = ClassLoader::convertFilePath($this->resolveName());
        if (!is_file($path)) {
            throw new \Exception('template file not found:' . get_class($this));
        }
        include $path;
    }

    public function resolveName ()
    {
        return str_replace( 'classes', 'templates', get_class($this));
    }

    public function assign($val) {
        echo htmlspecialchars($val, ENT_QUOTES);
    }
}