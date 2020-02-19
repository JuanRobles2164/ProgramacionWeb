<?php

/*
Procuré hacer la clase tan genérica como es posible
Para poder manejar y ejecutar operaciones básicas sobre ella
con lo que ya sabemos sobre SQL

Los atributos de la base de datos cambiarán en cuanto se nos proporcione
una nueva base de datos

Por favor no mover esos atributos,
y si lo hacen, restaurarlos cuanto antes
*/

class DB{
    private $serverIp = "localhost";
    private $userName = "root";
    private $userPass = "";
    private $dbName = "ProgramacionWeb";
    private $dbPort = "";

    public function __construct(){
        
    }
    /*
    Conecta el programa a la base de datos
    */
    private function connect(){
        $conn = mysqli_connect($this->serverIp, $this->userName, $this->userPass);
        mysqli_select_db($dbName, $conn);
        return $conn;
    }

    /*
    Realiza y retorna los resultados de cualquier consulta
    */ 
    public static function select($SQL){
        return mysqli_query($this->connect(), $SQL);
    }

    /*Borra cualquier registro*/
    public static function delete($SQL){
        mysqli_query($this->connect(), $SQL);
    }
    /*Actualiza cualquier registro*/
    public static function update($SQL){
        mysqli_query($this->connect(), $SQL);
    }
    /*Edita la estructura de nuestra base de datos*/
    public static function statement($SQL){
        mysqli_query($this->connect(), $SQL);
    }
}