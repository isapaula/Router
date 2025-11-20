<?php

namespace Core;
use Controllers\PacienteController; 
use Controllers\HomeController as Home;
use Views\Erro404;

class Router{


    public function direcionar(){

        $url = $_SERVER['REQUEST_URI']; 

        $path = parse_url($url, PHP_URL_PATH); 
        
        $arrayURL = explode('/', $path); 
        
        $method = end($arrayURL); 
        
        $MaybeClass = prev($arrayURL);
        
        if (count($arrayURL) >= 5 ) { 

            $ClassName = '\\Controllers\\'. ucfirst($MaybeClass). 'Controller';

            if (class_exists($ClassName) && method_exists($ClassName, $method)) {

                $controller = new $ClassName(); 
                $controller->$method(); 
                
            }else{ 
                
                echo "<h1>Erro 404</h1> <p>A página que você tentou acessar não existe.</p>"; 
            } 
        }else { 
            $controller = new Home(); $controller->index();
        }

    }


    /*

    public function direcionar(){

        $url = $_SERVER['REQUEST_URI']; 

        $path = parse_url($url, PHP_URL_PATH); 

        $method = basename($path); 

        $basenameclass = dirname($path, 1);

        $class = basename($basenameclass); 

        $ClassName = '\\Controllers\\'. ucfirst($class). 'Controller';


        if (class_exists($ClassName) && method_exists($ClassName, $method)) {
            
                $controller = new $ClassName();
                $controller->$method();
        
        }elseif (!class_exists($ClassName) || !method_exists($ClassName, $method) ) {
            echo "<h1>Erro 404</h1>
            <p>A página que você tentou acessar não existe.</p>";

        } else {

            $controller = new Home(); 
            $controller->index();
        }  
    }*/
}

