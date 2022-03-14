<?php
  namespace app\core;

  class Router
  {
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
      $this->request = $request;
    }

    public function get($path, $callback)
    {
      $this->routes['get'][$path] = $callback;
    }

    //determine incoming request and resolve accordingly
    public function resolve()
    {
      $path = $this->request->getPath();
      $method = $this->request->getMethod();
      $callback = $this->routes[$method][$path] ?? false;

      if($callback === false) {
        return "404";
      }

      if(is_string($callback)) {
        return $this->renderView($callback);
      }
      return call_user_func($callback);
    }

    public function renderView($view)
    {
      include_once __DIR__."/../views/$view.php";
    }

  }
