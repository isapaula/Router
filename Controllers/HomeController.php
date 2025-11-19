<?php 

namespace Controllers;

use Views\Erro404;
use Views\Home; 

class HomeController {

    public function index()
    {
        $home = new Home(); 
        echo $home->Exibir(); 
    }

    public function erro404(){

        $view = new Erro404(); 
        echo $view->Exibir();
    }
    
}
