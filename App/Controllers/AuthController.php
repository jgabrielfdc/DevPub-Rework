<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class authController extends Action{

    public function registerUser(){
        if(!isset($_POST['name']) || $_POST['name']==''){
            header('Location:/?registerError=1'); // Nome não informado
        }

        if(!isset($_POST['email']) || $_POST['email']==''){
            header('Location:/?registerError=2'); // Email não informado
        }
        if(!isset($_POST['interest']) || $_POST['interest']==''){
            header('Location:/?registerError=3'); // interesse não informado
        }

        if(!isset($_POST['senha']) || $_POST['senha']=='' || !isset($_POST['confirmaSenha']) || $_POST['confirmaSenha']==''){
            header('Location:/?registerError=4'); // Senha ou confirmação de senha não informados
        }
        if($_POST['senha']!==$_POST['confirmaSenha']){
                header('Location:/?registerError=5'); // Senha e Confirmação de Senha
        }

        $newUser=Container::getModel('User');

        // Atribuir os valores recebidos aos atributos do objeto
        $newUser->__set('name',$_POST['name']);
        $newUser->__set('email',$_POST['email']);
        $newUser->__set('password',md5($_POST['senha']));
        $newUser->__set('desire',$_POST['interest']);

        if(!$newUser->getUserValidate()){
            $newUser->registerUser(); // Registra o novo usuário
        }else{
            header("Location:/?registerError=6"); // Registro já existente
        }
    }

    public function loginUser(){
        # Instância o objeto
        $loginUser=Container::getModel('User');

        # Atribui os dados aos atributos
        $loginUser->__set('email',$_POST['email']);
        $loginUser->__set('password',md5($_POST['password']));
        
        # Verifica se existe o registro e recupera o ID
        $response=$loginUser->validateLogin();
        if($response){
            # Recupera os Dados do usuário
            $loginUser->__set("id",$response['id']);
            $response=$loginUser->getUser();

            session_start();
            $_SESSION['id']=$response['id'];
            $_SESSION['adm']=$response['adm']==1 ? true : false;
            $_SESSION['name']=$response['name'];
            $_SESSION['email']=$response['email'];
            $_SESSION['desire']=$response['desire'];
            $_SESSION['data_criacao']=$response['data_criacao'];
            $_SESSION['ultima_sessao']=$response['ultima_sessao'];
            $_SESSION['autenticado']=true;
            
            header("Location:/home");
        }else{
            session_start();
            $_SESSION['autenticado']=false;
            header("Location:/?loginError=1"); // Usuário não existe
        }
    }

    public function logout(){

        $usuario=Container::getModel('User');
        $usuario->__set('ultima_sessao',date('d-m-Y'));
        $usuario->__set('id',$_SESSION['id']);
        $usuario->updateSessionRegister();
        session_destroy();
        header("Location: /");
       }
}