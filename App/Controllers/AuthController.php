<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class authController extends Action{

    public function registerUser(){
        if(!isset($_POST['name']) || $_POST['name']==''){
            header('Location:/?registerError=1');
        }

        if(!isset($_POST['email']) || $_POST['email']==''){
            header('Location:/?registerError=2');
        }
        if(!isset($_POST['interest']) || $_POST['interest']==''){
            header('Location:/?registerError=3');
        }

        if(!isset($_POST['senha']) || $_POST['senha']=='' || !isset($_POST['confirmaSenha']) || $_POST['confirmaSenha']==''){
            header('Location:/?registerError=4');
        }
        if($_POST['senha']!==$_POST['confirmaSenha']){
                header('Location:/?registerError=5');
        }

        $newUser=Container::getModel('User');

        $newUser->__set('name',$_POST['name']);
        $newUser->__set('email',$_POST['email']);
        $newUser->__set('password',md5($_POST['senha']));
        $newUser->__set('desire',$_POST['interest']);

        if(!$newUser->getUserValidate()){
            $newUser->registerUser();
        }else{
            header("Location:/?registerError=6");
        }
    }

    public function loginUser(){
        
    }

    public function logout(){
        session_destroy();
        header("Location: /");
       }
}