<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class appController extends Action{

    public function materiais(){

       $this->autoRender();
    }

    public function home(){
        $this->render('home');
    }

    public function usuario(){
        $this->render('usuario');
    }

    public function suporte(){
        $this->autoRender();
    }
}