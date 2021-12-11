<?php 

class linksController {

    public static function linkController(){

        if(isset($_GET["links"])){
            
            $link = $_GET["links"];
        }
        else {
            $link = "index";
        }


        $answer = linksModels::linkModel($link);

        include $answer;
    }
}



?>