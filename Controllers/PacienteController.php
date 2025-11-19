<?php

namespace Controllers;

use Models\Paciente;
use Views\Paciente_listar;
 

class PacienteController {

    public function index(){

        echo "Index da PacienteController";
    }

    public function listar(){

        $pacientes = new Paciente(); 

        $dados = $pacientes->inserirPacientes(); 

        $view = new Paciente_listar('table', $dados); 
        $view->setPropriedades('class', 'table');
        echo $view->render(); 
        
    }
    
}
