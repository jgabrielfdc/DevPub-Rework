<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class appController extends Action{

    public function materiais(){

       $this->autoRender();
    }

    public function routes(){
        if(isset($_SESSION['adm']) && $_SESSION['adm']){
            $controllers=Container::getModel("Route");
            $this->view->controllerList=$controllers->getControllers();
        
            $this->autoRender();
        }else{
            header("Location:/");
        }
    }

    public function insertRoute(){
        $route=Container::getModel("Route");
        $route->__set("route",'/'.$_POST["route"]);
        $route->__set("controller",$_POST['controller']);
        $route->__set("action",$_POST['route']);
        $route->insertRoute();
        
    }
}