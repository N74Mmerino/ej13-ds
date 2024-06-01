<?php

require_once 'modelo/DueñoMascota.php';
require_once 'modelo/Mascota.php';

$DueñoMascota = New DueñoMascota ();
$DueñoMascota->Nombre = ' Raul ';
$DueñoMascota->Apellido =' Gomez ';
$DueñoMascota->Documento =' 22314456 ';
$DueñoMascota->Celular =' 34156698 ';
$DueñoMascota->Direccion =' Francia 3800 ';
$DueñoMascota->Id = '2';

$mascota = New Mascota();
$mascota->Nombre = 'tofi';
$mascota->Raza = '3000' ;
$mascota->Id ='1';
$mascota->DueñoMascota = $DueñoMascota ;

$mascota-> MostrarPropiedades();


