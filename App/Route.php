<?php

//Responsável por executar as rotas

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes["home"] = array(
            "route" => "/",
            "controller" => "indexController",
            "action" => "index"
        );

        $routes["usuario"] = array(
            "route" => "/usuario",
            "controller" => "IndexController",
            "action" => "usuario"
        );

        $this->setRoutes($routes);
    }

}
?>