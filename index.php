<?php

require_once 'modelo/Mascota.php';
require_once 'modelo/DueñoMascota.php';





$d= new DueñoMascota;
$d-> Id= 1;
$d-> Nomre= 'Guadalupe';
$d-> Apellido = 'Ramirez';
$d->Documento= 33847857;
$d->Celular= 155362254;
$d->Direccion= 'Salta 3030';

//instanciar mascota

$m= New Mascota;
$m->Id= 12;
$m->Nombre= 'Anita';
$m->Raza= 'Carey';
$m->Dueño=$d;



$m->MostrarDatos();


