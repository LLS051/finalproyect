<?php

class userController
{


    //Acess System (Backend)
    public function loginController()
    {

        if (isset($_POST["ingresar"])) {
            $dateController = array("username" => $_POST["username"], "password" => $_POST["password"]);

            $answer = userModel::loginModel($dateController, "user");

            if ($answer == TRUE) {
                if ($answer->nick_user == $_POST["username"] && $answer->password_user == $_POST["password"]) {

                    $_SESSION['validate'] = true;
                    $_SESSION['userID'] = $answer->id_user;
                    $_SESSION['userName'] = $answer->name_user;
                    $_SESSION['userImage'] = $answer->imagen_user;
                    $_SESSION['userRoll'] = $answer->roll;

                    header("location:dashboard");
                } else {
                    echo "Datos incorrecto";
                }
            }
        }
    }
    public function RegisterController()
    {

        if (isset($_POST["registrar"])) {
            $dateController = array(
                "username" => $_POST["nickuser"],
                "nameuser" => $_POST["nameuser"],
                "emailuser" => $_POST["emailuser"],
                "phone" => $_POST["phoneuser"],
                "passworduser" => $_POST["passworduser"],
                "imageuser" => $_POST["imageuser"]
            );

            $answer = userModel::registerModel($dateController, "user");
            var_dump($answer);
            if ($answer == TRUE) {
            }
        }
    }
    public function getUserController()
    {
        $answer = userModel::getUserModel("user");

        return $answer;
    }
}
