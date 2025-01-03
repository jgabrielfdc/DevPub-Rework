<?php

namespace MF\Init;

abstract class Bootstrap{

    // Atributo que recebe as rotas existentes
    private $routes;

    abstract protected function initRoutes();

    // Executa ao instânciar o objeto, no caso executa quando no 
    public function __construct(){
        
        $this->initRoutes(); // Inicializa as rotas 

        $this->run($this->getURL()); // Executa o metodo com base na URL atual do navegador
    }

    // Recupera as rotas existentes
    public function getRoutes(){
        return $this->routes;
    }

    // Seta as Rotas Existentes
    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    // Função que roda ao mudar a URL fazendo com que seja instânciado o Objeto e executado o metodo que renderiza a página
    protected function run($url){

        // Vai passar por todos os itens da lista de rotas
        foreach($this->getRoutes() as $route){
            if($url==$route['route']){
                $class="App\\Controllers\\".ucfirst($route['controller']); // Escreve a classe a ser chamada
                $action=$route['action']; // Seleciona a Action a ser executada e pega o nome do arquivo a ser

                $objct=new $class;
                $objct->$action($action /*Isso aqui é o Path*/);
            }
        }
    }
    protected function getURL()
    {
        // Assim eu recupero somente o caminho encaminhado na url
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}