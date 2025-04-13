<?php 
namespace App\Models;
use MF\Model\Database;

class Route extends Database{

    private $id;
    private $route;
    private $controller;
    private $action;

    public function __set($attr,$value){
        $this->$attr = $value;
    }
    public function __get($attr){
        return $this->$attr;
    }


    public function getRoutes(){
        $query="SELECT R.id,R.route,C.controller,R.action FROM tb_routes as R, tb_controllers as C WHERE C.id=R.id_controller";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getControllers(){
        $query= "SELECT id,controller FROM tb_controllers";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertRoute(){
        echo $this->route;
        echo $this->controller;
        echo $this->action;

        $query="INSERT INTO tb_routes(route,id_controller,action) VALUES (:route,:id_controller,:action)";
        $stmt= $this->db->prepare($query);

        $stmt->bindValue(":route",$this->__get("route"));
        $stmt->bindValue(":id_controller",$this->__get("controller"));
        $stmt->bindValue(":action",$this->__get("action"));

        $stmt->execute();

        header("Location:/routes");
    }

    public function deleteRoute(){
        $query="DELETE FROM tb_routes WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$this->__get("id"));

        $stmt->execute();
        header("Location:/routes");
    }
    
}