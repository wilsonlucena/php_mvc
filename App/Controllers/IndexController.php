<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 20/08/16
 * Time: 16:47
 */

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{
    
    public function index()
    {
        $client = Container::getModel("Client"); //To pegando esse dados do meu miniframework SON na Vendor
        $this->view->clients = $client->fetchAll();
        $this->render("index");
    }
    
    public function contact()
    {
        $client = Container::getModel("Client"); //To pegando esse dados do meu miniframework na Vendor
        $this->view->clients = $client->find(2);
        $this->render("contact");

    }

}