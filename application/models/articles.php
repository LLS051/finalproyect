<?php

require_once "models/connection.php";

class articlesmodels
{

    public static function getarticlemodel($tabla)
    {

        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("SELECT id_articles, category, title, contents, image /*date_pub, date_act_up*/ FROM $tabla");

        $stmt->execute();

        $articles = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $articles;

        $stmt = null;
    }
    public static function createArticleModel($dateModels, $tabla)
    {
        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("INSERT INTO $tabla(category, title, contents, image, date_pub) 
        VALUES (:categoria, :titulo, :contenido, :imagen, :publicacion)");

        $stmt->bindParam(":categoria", $dateModels["categoria"], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $dateModels["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido", $dateModels["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $dateModels["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":publicacion", $dateModels["publicacion"], PDO::PARAM_STR);


        

        if ($stmt->execute()) {

            $articles = ["exitoso",$db->lastInsertId()];

        return $articles;
        } else {
            return "error";
        }


        $stmt = null;
    }

    public static function editarticlemodel($idDateModels, $tabla)
    {
        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("SELECT a.id_articles AS idArticle, a.category AS Category , a.title AS Title,
        a.contents AS Contents , a.image AS Image,
         a.date_pub AS Date, c.name_category AS CategoryName  FROM $tabla AS a
       INNER JOIN category AS c
       ON a.category = c.id_category
       WHERE a.id_articles = :id");

        $stmt->bindParam(":id", $idDateModels, PDO::PARAM_INT);
      
        
        $stmt->execute();

        $articles = $stmt->fetch(PDO::FETCH_OBJ);

        return $articles;

        $stmt = null;
    }

    public static function updateArticleModel($dateModels, $tabla)
    {
        $database = new connection();
        $db = $database->conectar();

        if($dateModels['imagen'] == ""){

            $stmt = $db->prepare("UPDATE $tabla SET  category = :categoria, title = :titulo, contents = :contenido WHERE
            id_articles = :id");
    

            $stmt->bindParam(":id", $dateModels["id"], PDO::PARAM_INT);
            $stmt->bindParam(":categoria", $dateModels["categoria"], PDO::PARAM_INT);
            $stmt->bindParam(":titulo", $dateModels["titulo"], PDO::PARAM_STR);
            $stmt->bindParam(":contenido", $dateModels["contenido"], PDO::PARAM_STR);
           
    
    
            
    
            if ($stmt->execute()) {
    
                $articles = ["exitoso",$dateModels["id"]];
    
            return $articles;
            } else {
                return "error";
            }


        }
        else{
            $stmt = $db->prepare("UPDATE $tabla SET  category = :categoria, title = :titulo, contents = :contenido, image = :imagen WHERE
            id_articles = :id");
    

            $stmt->bindParam(":id", $dateModels["id"], PDO::PARAM_INT);
            $stmt->bindParam(":categoria", $dateModels["categoria"], PDO::PARAM_INT);
            $stmt->bindParam(":titulo", $dateModels["titulo"], PDO::PARAM_STR);
            $stmt->bindParam(":contenido", $dateModels["contenido"], PDO::PARAM_STR);
            $stmt->bindParam(":imagen", $dateModels["imagen"], PDO::PARAM_STR);
           
    
    
            
    
            if ($stmt->execute()) {
    
                $articles = ["exitoso",$dateModels["id"]];
    
            return $articles;
            } else {
                return "error";
            }

        }

        


        $stmt = null;
    }
    public static function deletearticlemodel($idDateModels, $tabla)
    {
        $database = new connection();
        $db = $database->conectar();

        $stmt = $db->prepare("DELETE FROM $tabla WHERE id_articles = :id");

        $stmt->bindParam(":id", $idDateModels, PDO::PARAM_INT);
      
    
        if($stmt->execute()){
            return "EXITOSO";
        }else {
            return "ERROR";
        }
        $stmt = null;
    }
}
