<?php

//Responsável por executar as rotas

namespace App;
use MF\Init\Bootstrap;
use MF\Model\Container;

class Route extends Bootstrap
{
    protected function initRoutes()
    {   
        $route=Container::getModel("Route");
        $routeList=$route->getRoutes();
        $routes=[];

        $routes['landing']=[
            "route"=>"/",
            "controller"=>"indexController",
            "action"=>"landing"
        ];
        
        $routes["home"]=array(
            "route"=>"/home",
            "controller"=>"appController",
            "action"=>"home"
        );
        
        $routes["routes"]=array(
            "route"=>"/routes",
            "controller"=>"routesController",
            "action"=>"routes"
        );

        $routes["insertRoute"]=array(
            "route"=>"/insertRoute",
            "controller"=>"routesController",
            "action"=>"insertRoute"
        );

        $routes["deleteRoute"]=array(
            "route"=>"/deleteRoute",
            "controller"=>"routesController",
            "action"=>"deleteRoute"
        );

        $routes["sendMail"]=array(
            "route"=>"/sendMail",
            "controller"=>"emailController",
            "action"=>"sendMail"
        );

        session_start();
        foreach($routeList as $route){
            $routes[str_replace("/","",$route['route'])]=array(
                "route"=>$route['route'],
                "controller"=>($route['controller']."Controller"),
                "action"=>$route['action']
            );
        }

        $this->setRoutes($routes);
    }

}
?>