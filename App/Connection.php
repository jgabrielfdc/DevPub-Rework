<?php
namespace App;

class Connection{
    // Instância a conexão com o banco de dados
    // Por ser uma função estática, não precisa ser instânciado um objeto para utilizar, pode ser instânciada diretamente da classe
    public static function getDb(){
        try{
            $conn=new \PDO(
                "mysql:host=localhost;dbname=devpub;charset=utf8",
                "root",
                ""
            );

            return $conn;
        }catch(\PDOException $error){
            //.. Tratar de Alguma forma
        }
    }

}