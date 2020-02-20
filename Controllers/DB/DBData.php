<?php
/*
No mover nada aquí, por favor
*/
class DBData{
    function __construct(){
        $this->serverIp = "localhost";
        $this->userName = "root";
        $this->userPass = "";
        $this->dbName = "programacionweb";
        $this->dbPort = "";
    }
    public function getServerIp(){
        return $this->serverIp;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getUserPass(){
        return $this->userPass;
    }
    public function getDbName(){
        return $this->dbName;
    }
}