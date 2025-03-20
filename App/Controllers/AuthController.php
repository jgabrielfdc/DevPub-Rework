<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class authController extends Action{

    public function registerUser(){
        print_r($_POST);
    }

    public function logout(){
        header("Location: /register");
       }
}