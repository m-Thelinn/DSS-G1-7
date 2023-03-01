<?php

namespace App\Models;

class Equipo 
{
    private $id_equipo;
    private $nombre;
    private $abreviatura;
    private $descripcion;
    private $foto;
    private $pais;
    private $division;
    private $jugadores = array(10);
}
