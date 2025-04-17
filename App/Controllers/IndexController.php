<?php
namespace App\Controllers;

// OS recursos do Miniframework

use MF\Controller\Action;
use MF\Model\Container;

class indexController extends Action{

    public function landing(){
        $desire=Container::getModel("User");

        $this->view->desire=$desire->getDesires();

       $this->render("landing","layout_landing");
    }

    public function sobre_nos($path){
        $info=Container::getModel("Info");

        $arrayInfo=$info->getInfo();

        $this->view->dados=$arrayInfo;

        $this->render("equipe");
    }
   public function register(){
    
    
    $this->render("cadastro");
   }

  
    
}