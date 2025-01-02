<?php 
namespace App\Models;
use MF\Model\Database;

class Usuario extends Database{
    public function getDadosUsuario(){
        $query="SELECT nome,email,interesse FROM usuarios as U, interesses as I WHERE U.FK_interesses=I.IDInteresse;";
        return $this->db->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }
}