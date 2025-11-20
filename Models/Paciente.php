<?php 

namespace Models;

// irei seguir o mesmo padrão da anterior para agilizar o processo. 
class Paciente {

    public function inserirPacientes(){

        $pacientes = array(array('nome' => 'Joaquin', 'idade' => 20, 'Genero' => 'M'),
                           array('nome' => 'Paulo', 'idade' => 50, 'Genero' => 'M'),
                           array('nome' => 'Murilo', 'idade' => 27, 'Genero' => 'M'));
     
        return $pacientes;

    }

}