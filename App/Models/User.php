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
        $query="INSERT INTO tb_users(name,email,password,desire) VALUES (:name,:email,:password,:desire)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":name",$this->__get("name"));
        $stmt->bindValue(":email",$this->__get("email"));
        $stmt->bindValue(":email",$this->__get("email"));
        $stmt->bindValue(":desire",$this->__get("desire"));
    }

    public function getDesires(){
        $query= "SELECT id,desire FROM devpub.tb_desire;";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}