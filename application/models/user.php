<?php

require_once "models/connection.php";

class userModel
{


    public static function loginModel($dateModel, $tabla)
    {

        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("SELECT id_user, nick_user, name_user, email_user, password_user, imagen_user, status, phone, roll
         FROM $tabla WHERE nick_user = :username");

        $stmt->bindParam(":username", $dateModel["username"], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);

        $stmt = null;
    }
    public static function registerModel($dateModel, $tabla)
    {

        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("INSERT INTO $tabla(nick_user, name_user, email_user, password_user, imagen_user, phone)
         VALUES (:username, :nameuser, :emailuser, :passworduser, :imageuser, :phone)");

        $stmt->bindParam(":username", $dateModel["username"], PDO::PARAM_STR);
        $stmt->bindParam(":nameuser", $dateModel["nameuser"], PDO::PARAM_STR);
        $stmt->bindParam(":emailuser", $dateModel["emailuser"], PDO::PARAM_STR);
        $stmt->bindParam(":passworduser", $dateModel["passworduser"], PDO::PARAM_STR);
        $stmt->bindParam(":imageuser", $dateModel["imageuser"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $dateModel["phone"], PDO::PARAM_STR);




        if ($stmt->execute()) {
            return "EXITOSO";
        } else {
            return "ERROR DE REGISTRO";
        }



        $stmt = null;
    }

    public static function getUserModel($tabla){
        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("SELECT id_user, nick_user, name_user, email_user, imagen_user, status, phone, roll FROM 
        $tabla");

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $users;
            
        $stmt = null;
    }
}
