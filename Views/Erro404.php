<?php 

namespace Views; 

class Erro404 {

    private string $header; 
    private string $text; 

    public function __construct()
    {
        $this->header = '<h1>Erro 404</h1>';
        $this->text =  '<p>A página que você tentou acessar não existe.</p>'; 
        
    }

    public function Exibir(){

        $html = $this->header; 

        $html .= $this->text; 

        return $html;
    }

}