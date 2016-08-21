<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 21/08/16
 * Time: 01:01
 */

namespace SON\DI;


use App\Conn;

class Container
{
    public static function getModel($model)
    {
        //Função para retornar meus models
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}