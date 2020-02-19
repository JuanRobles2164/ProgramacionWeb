<?php
class Docente{
    public function __construct($nombre = null, $apellidos, $edad){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
}