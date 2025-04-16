<?php 
namespace App\Models;
use MF\Model\Database;

class User extends Database{

    private $id;
    private $name;
    private $email;
    private $password;
    private $desire;
    private $adm;


    public function __set($attr, $value){
        $this->$attr = $value;
    }

    public function __get($attr){
        return $this->$attr;
    }
    public function registerUser(){
        $query="INSERT INTO tb_user(name,email,password,id_desire) VALUES (:name,:email,:password,:desire)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":name",$this->__get("name"));
        $stmt->bindValue(":email",$this->__get("email"));
        $stmt->bindValue(":password",$this->__get("password"));
        $stmt->bindValue(":desire",$this->__get("desire"));

        $stmt->execute();
    }

    public function getLoginUser(){
        $query="SELECT id,name,email,password,desire,adm FROM tb_user as TU, tb_desire as TD WHERE TU.id_desire=TD.id AND WHERE id=:id";
        $stmt=$this->db->prepare($query);
        $stmt->bindValue(":id",$this->__get('id'));
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getDesires(){
        $query= "SELECT id,desire FROM devpub.tb_desire;";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserValidate(){
        $query="SELECT email,password FROM tb_user WHERE email=:email AND password = :password";
        $stmt=$this->db->prepare($query);
        $stmt->bindValue(":email",$this->__get('email'));
        $stmt->bindValue(":password",$this->__get('password'));
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}