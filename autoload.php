<?php


spl_autoload_register(function ($classname){

    $file = __DIR__.'/'. str_replace('\\', '/', $classname). '.php'; 

    if (file_exists($file)) {
        
        include $file;
        return $file; 

    }
    
}); 















































