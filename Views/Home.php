<?php

namespace Views;

class Home {

    private string $header; 
    private string $text; 

    public function __construct()
    {
        $this->header = "<h1>Home</h1>";
        $this->text = "<p>Você está na home agora!</p>"; 
        
    }

    public function Exibir(){

        $html = $this->header; 

        $html .= $this->text; 

        return $html;
        
    }
}