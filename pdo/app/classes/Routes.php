<?php

namespace app\classes;

class Routes
{
  public static function load($routes, $uri){
    if(!array_key_exists($uri, $routes)){
      throw new \Exception("Essa rota não existe {$uri}");
    }
    
    return "../app/{$routes[$uri]}.php";
  }
}