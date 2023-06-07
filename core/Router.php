<?php

namespace app\core;
class Router 
{
    public Request $request;
    protected $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        //var_dump($_SERVER);
        $path = $this->request->getPath();
        //var_dump($path);
        $method = $this->request->getMethod();
        //var_dump($method);
        //var_dump($this->routes);
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "Not found";
            exit;
        }
        //var_dump($callback);
        echo call_user_func($callback);
    }
}