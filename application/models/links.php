<?php

class linksModels
{


    public static function linkModel($link)
    {

        $route = explode("/", $link);

        if (
            $route[0] == "dashboard" ||
            $route[0] == "login"     ||
            $route[0] == "editUser"  ||
            $route[0] == "user"      ||
            $route[0] == "articles"  ||
            $route[0] == "exit"      ||
            $route[0] == "addUser"   ||
            $route[0] == "editArticles" ||
            $route[0] == "addArticles"     
            
            ) 
            {

            $modules = "views/modules/" . $route[0]. ".php";
        } elseif ($route[0]== "index") {
            $modules = "views/modules/login.php";
        }elseif ($route[0]== "deleteArticles") {
            $modules = "views/modules/articles.php";
        } else {
            $modules = "views/modules/login.php";
        }

        return $modules;
    }
}
