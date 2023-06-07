<?php

namespace app\core;

class Request 
{
    public function getPath()
    {
        //$path = $_SERVER['REQUEST_URI'] ?? '/';
        //$path = $_SERVER['REQUEST_URI'] ?? '/PHPMVCFramework/';
        $path = $_SERVER['REQUEST_URI' == 'PHPMVCFramework'] ?? '/';
        //$path = isset($_SERVER['REQUEST_METHOD' == 'PHPMVCFramework']) ? $_SERVER['REQUEST_METHOD' == 'PHPMVCFramework'] : '/';  same as above
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
        //var_dump($position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}