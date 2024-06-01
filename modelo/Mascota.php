<?php 

class Mascota {
    public $Id;
    public $Nombre;
    public $Raza;
    public $DueñoMascota;


    public function MostrarPropiedades(){
        echo 'Mascota <br>';
        echo '----------------------- <br>';
        echo 'Nombre: '.$this->Nombre .'<br>';
        echo 'Id: '.$this->Id . '<br>' ;
        echo 'Raza: $'.$this->Raza .'<br>'; 
        echo '<br>';
        echo 'Dueño Mascota <br> ';
        echo '----------------------- <br>';
        echo 'Nombre: '.$this->DueñoMascota->Nombre . '<br>' ;
        echo 'Apellido: '.$this->DueñoMascota->Apellido . '<br>' ;
        echo 'Celular: '.$this->DueñoMascota->Celular . '<br>' ;
        echo 'Direccion: '.$this->DueñoMascota->Direccion . '<br>' ;
        echo 'Id: '.$this->DueñoMascota->Id . '<br>' ;
    
}

}
