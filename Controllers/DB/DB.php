<?php
require_once('DBData.php');
/*
Procuré hacer la clase tan genérica como es posible
Para poder manejar y ejecutar operaciones básicas sobre ella
con lo que ya sabemos sobre SQL

Los atributos de la base de datos cambiarán en cuanto se nos proporcione
una nueva base de datos

Por favor no mover los atributos de la clase DBData,
y si lo hacen, restaurarlos cuanto antes
El constructor de Mysqli_connect, viene así:
    ServerIp, Nombre de usuario, contraseña de usuario, base de datos
*/

class DB{


    function __construct(){

    }
        
    /*
    Realiza y retorna los resultados de cualquier consulta
    */ 
    public static function select($SQL) : mysqli_result
    {
        $DbData = new DBData();
        $mysqli = new mysqli($DbData->getServerIp(), $DbData->getUserName(), $DbData->getUserPass(), $DbData->getDbName());
        $data = $mysqli->query($SQL);
        $mysqli->close();
        return $data;
    }
    /*
    Edita la estructura de nuestra base de datos
    Tambien puede hacer uso de cualquier sentencia DML (INSERT, UPDATE y DELETE)
    PERO NO SE RECOMIENDA A LA HORA DE CONSULTAR DATOS
    */
    public static function statement($SQL){
        $DbData = new DBData();
        $mysqli = new mysqli($DbData->getServerIp(), $DbData->getUserName(), $DbData->getUserPass(), $DbData->getDbName());
        $mysqli->query($SQL);
        $mysqli->close();
        
    }
}