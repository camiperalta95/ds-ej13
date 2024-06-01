<?php


class Mascota{

    public $Id;
    public $Nombre;
    public $Raza;


    public $Dueño;


    public function MostrarDatos (){

        echo ' Id mascota: '.$this->Id. '<br>';
        echo ' Nombre mascota: '.$this->Nombre. '<br>';
        echo ' Raza mascota: '.$this->Raza. '<br>';
        
        echo '<br>';

        echo 'Id Dueño: '. $this->Dueño->Id . '<br>';
        echo 'Nombre Dueño: '. $this->Dueño->Nombre . '<br>';
        echo 'Apellido Dueño:'. $this->Dueño->Apellido. '<br>';
        echo 'Documento Dueño: '. $this->Dueño->Documento . '<br>';
        echo 'Celular Dueño: '. $this->Dueño -> Celular . '<br>';
        echo 'Direccion Dueño: '. $this->Dueño->Direccion . '<br>';
        

    


    }

}


