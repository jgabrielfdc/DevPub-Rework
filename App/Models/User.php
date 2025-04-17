<?php 
namespace App\Models;

use DateTime;
use MF\Model\Database;

class User extends Database{

    private $id;
    private $name;
    private $email;
    private $password;
    private $desire;
    private $adm;
    private $data_criacao;
    private $ultima_sessao;


    public function __set($attr, $value){
        $this->$attr = $value;
    }

    public function __get($attr){
        return $this->$attr;
    }
    public function registerUser(){
        $query="INSERT INTO tb_user(name,email,password,id_desire,data_criacao,ultima_sessao) VALUES (:name,:email,:password,:desire,:data_criacao,:ultima_sessao)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":name",$this->__get("name"));
        $stmt->bindValue(":email",$this->__get("email"));
        $stmt->bindValue(":password",$this->__get("password"));
        $stmt->bindValue(":desire",$this->__get("desire"));
        $stmt->bindValue(":data_criacao",date('d-m-Y'));
        $stmt->bindValue(":ultima_sessao",date('d-m-Y'));

        $stmt->execute();
    }

    public function validateLogin(){
        $query="SELECT 
                    id
                FROM 
                    tb_user
                WHERE 
                    email=:email 
                AND 
                    password=:password";
        $stmt=$this->db->prepare($query);
        $stmt->bindValue(":email",$this->__get('email'));
        $stmt->bindValue(":password",$this->__get('password'));
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getUser(){
        $query="SELECT 
                    TU.id,TU.name,TU.email,TD.desire,TU.adm,TU.data_criacao,TU.ultima_sessao 
                FROM 
                    tb_user as TU 
                INNER JOIN 
                    tb_desire as TD 
                ON 
                    TU.id_desire=TD.id 
                WHERE 
                   TU.id=:id";
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

    public function updateSessionRegister(){
        $query="UPDATE tb_user SET ultima_sessao=:ultima_sessao WHERE id=:id";
        $stmt=$this->db->prepare($query);
        $stmt->bindValue(":ultima_sessao",$this->__get('ultima_sessao'));
        $stmt->bindValue(":id",$this->__get('id'));
        $stmt->execute();
    }
}