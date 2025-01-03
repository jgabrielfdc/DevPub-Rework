<?php

//Responsável por executar as rotas

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        // ? Rotas das Páginas Principais
        $routes["home"] = array(
            "route" => "/",
            "controller" => "indexController",
            "action" => "home"
        );
        $routes['suporte']=[
            "route"=>"/suporte",
            "controller"=>"indexController",
            "action"=>"suporte"
        ];

        $routes['intro']=[
            "route"=>"/intro",
            "controller"=>"indexController",
            "action"=>"intro"
        ];

        $routes['materiais']=[
            "route"=>"/materiais",
            "controller"=>"indexController",
            "action"=>"materiais"
        ];
        

        $routes["usuario"] = array(
            "route" => "/usuario",
            "controller" => "IndexController",
            "action" => "usuario"
        );

        $this->setRoutes($routes);
    }

}
?>