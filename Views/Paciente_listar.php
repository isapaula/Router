<?php

namespace Views; 

class Paciente_listar {

    protected string $tagname; 
    public array $propriedade; 
    protected array $dados; 
    

    public function __construct($tagname, $pacientes)
    {
        $this->tagname = $tagname; 
        $this->dados = $pacientes;
        
    }

    public function setPropriedades(string $class, string $value){

        $this->propriedade = [
            $class => $value
        ]; 

        return $this;
    }

    public function render(){

        $dados = $this->dados;
        
        $html = '<h1>Listar</h1>';

        $html .= "<{$this->tagname}"; 

        foreach ($this->propriedade as $key => $value) {
            $html .= " {$key}=".'"'.$value. '" ';  
        }

        $header = ['nome', 'idade', 'Genero']; 

        $html .= ">"; 

        foreach ($dados as $arrayexterno => $arrayinterno) {

            $html .= '<tr>';
            
            foreach ($arrayinterno as $headerarrayinterno => $valuearrayinterno) {
                
                if (in_array($headerarrayinterno, $header)) {
                    
                    $html .= "<th>{$headerarrayinterno}</th>";   
                }
                $html .= "<td>{$valuearrayinterno}</td>"; 
            }
            $html .= '</tr>';
        }

        $html .= "</{$this->tagname}>";

        return $html;

    }
}