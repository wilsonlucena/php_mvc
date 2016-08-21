<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 20/08/16
 * Time: 13:11
 */

namespace App;

use SON\Init\Bootstrap;

class Route extends Bootstrap
{

    //Metodo para criar rotas
     protected function initRoutes()
    {
      $routes['home'] = array('route'=>'/', 'controller'=>"indexController",'action'=>'index');
      $routes['contact'] = array('route'=>'/contact', 'controller'=>"indexController",'action'=>'contact');

        $this->setRoutes($routes);
    }



}