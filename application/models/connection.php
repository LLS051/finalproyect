<?php 

include_once 'config/connection.php';

class connection {

private $host = DB_HOST;
private $dataBase = DB_SCHEMA;
private $userName = DB_USER;
private $password = DB_PASSWORD;
private $enconding = DB_ENCODING;
private $connection;

public function conectar(){

    $this->connection = null;

    try{

        //We instantiate the connections with the private properties of PDO
        $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase, $this->userName, $this->password);

        //We instantiate Enconding 
        $this->connection->exec($this->enconding);

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





    } catch(PDOException $e){
            echo "Error en la conexion a la base de datos". $e->getMessage();
    }

    return $this->connection;

}




}





?>