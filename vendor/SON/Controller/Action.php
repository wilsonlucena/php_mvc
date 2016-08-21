<?php

namespace SON\Controller;


 abstract class Action
{
     protected $view;
     private $action;

    
    public function __construct()
    {
        $this->view = new \stdClass();
    }


    //Metodo para redenrizar Views
    protected function render($action, $layout = true)
    {
        $this->action = $action;

        if($layout == true && file_exists("../App/Views/layout.phtml"))
        {
            include_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }


    }

    protected function content()
    {
        $current = get_class($this);
        $singleClassNome = strtolower((str_replace("Controller","",str_replace("App\\Controllers\\","", $current))));
        include_once "../App/Views/".$singleClassNome."/". $this->action.".phtml";
    }
}