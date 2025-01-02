<?php
// Definição de namespace
namespace MF\Model;

// Chamada de Classe
use App\Connection;

// Modelo para instânciar as classes presentes nos Models de forma dinâmica
class Container{

    // Função estática para instânciar classes presentes na pasta Models
    public static function getModel($model){
        $conn=Connection::getDb();
        $class = "\\App\\Models\\".ucfirst($model);
        
        return new $class($conn);
    }
}