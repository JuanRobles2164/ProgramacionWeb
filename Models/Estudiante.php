<?php

class Estudiante{
    /*
    Constructor de clases de muestra en php
    Los campos que se igualan a null, es porque son opcionales
    */
    public function __construct($nombre = null, $apellidos, $fecha_nac, $grado, $grupo, $genero){
        $this->$nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fecha_nac = $fecha_nac;
        $this->grado = $grado;
        $this->grupo = $grupo;
        $this->genero = $genero;
    }
}