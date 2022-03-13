<?php
  namespace app\core;

  class Router
  {
    protected array $routes = [];

    public function get($path, $callback)
    {
      $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
      //determine incoming request and resolve accordingly
      echo "<pre>";
      var_dump($_SERVER);
      echo "</pre>";
    }

  }
