<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class routesController extends Action{
    public function routes(){
        if(isset($_SESSION['adm']) && $_SESSION['adm']){
            $controllers=Container::getModel("Route");
            $this->view->controllerList=$controllers->getControllers();
            $this->view->routeList=$controllers->getRoutes();
            $this->render('routes');
        }else{
            header("Location:/");
        }
    }

    public function insertRoute(){
        $route=Container::getModel("Route");
        $route->__set("route",'/'.strtolower($_POST["route"]));
        $route->__set("controller",strtolower($_POST['controller']));
        $route->__set("action",strtolower($_POST['action']));
        $route->insertRoute();
        
    }

    public function deleteRoute(){

        $route=Container::getModel('Route');
        $route->__set("id",$_POST['delete']);
        $route->deleteRoute();
    }
}