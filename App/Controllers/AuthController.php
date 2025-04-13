<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class authController extends Action{

    public function registerUser(){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

    public function logout(){
        header("Location: /");
       }
}