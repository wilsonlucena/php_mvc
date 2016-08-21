<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 20/08/16
 * Time: 21:18
 */

namespace SON\Init;


abstract class Bootstrap
{
    private $routes;

    public function __construct()
    {
        //Iniciando iniciaRoutes
        $this->initRoutes();
        $this->run($this->getUrl());

    }

    //Metodo para criar rotas
    abstract protected function initRoutes();
    
    //Este metodo vai pegar o caminho do controller
    protected function run($url)
    {
        array_walk($this->routes, function ($route) use ($url){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class; 
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    //Metodo que vai ser a rota
    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    //Esse metodo vai dizer qual url o usuário esta usand
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}