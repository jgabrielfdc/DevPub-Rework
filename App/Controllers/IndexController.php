<?php
namespace App\Controllers;

// OS recursos do Miniframework

use App\Models\Usuario;
use MF\Controller\Action;
use MF\Model\Container;

class indexController extends Action{

    public function home($path){
       $this->render($path,"layout_com_menu");
    }

    public function sobre_nos($path){
        $info=Container::getModel("Info");

        $arrayInfo=$info->getInfo();

        $this->view->dados=$arrayInfo;

        $this->render($path,"layout2");
    }
    
    // Path está vindo de Bootstrap
    public function materiais($path){
        $this->render($path,"layout_com_menu");
    }

    public function suporte($path){
        $this->render($path,"layout_com_menu");
    }

    public function intro($path){
        $this->render($path,"layout_com_menu");
    }

    public function usuario($path){
       try{
        $usuario=Container::getModel("usuario");
        
        $dadosUsuario=$usuario->getDadosUsuario();

        $this->view->dadosUsuario=$dadosUsuario[0];
        $this->render($path,"layout_com_menu");
       }catch(\PDOException $erro){
        $this->view->erro=$erro;
        $this->render("falha","layout_com_menu");
       }

       
    }
    
}