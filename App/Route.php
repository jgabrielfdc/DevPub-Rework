<?php

//Responsável por executar as rotas

namespace App;
use MF\Init\Bootstrap;
use MF\Model\Container;

class Route extends Bootstrap
{
    protected function initRoutes()
    {   
        session_start();
        $_SESSION['adm']=true;
        $route=Container::getModel("Route");
        $routeList=$route->getRoutes();
        $routes=[];

        foreach($routeList as $route){
            $routes[$route['action']]=array(
                "route"=>$route['route'],
                "controller"=>($route['controller']."Controller"),
                "action"=>$route['action']
            );
        }

        $this->setRoutes($routes);
    }

}
?>