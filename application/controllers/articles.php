<?php

class articleController
{

    public function getarticleController()
    {

        $answer = articlesmodels::getarticlemodel("articles");

        return $answer;
    }


    public function addArticleController()
    {
        if (isset($_POST['crear'])) {
            if ($_FILES['image']['error'] > 0) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>No agrego imagen</strong>
    </div>';
            } else {
                $dateController = [
                    "categoria" => trim($_POST["category"]),
                    "titulo" => trim($_POST["title"]),

                    "contenido" => trim($_POST["contents"]),
                    "publicacion" => trim($_POST["date"])
                ];

                //var_dump($dateController);

                if ($dateController["titulo"] == "" || $dateController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Campo Titulo o Contenido Vacios</strong>
                </div>';
                } else {
                    //$temp = ;
                    $image = $_FILES["image"]["name"]; // Temporal
                    $imageArray = explode(".", $image);
                    $randonum = rand(1000, 9999);
                    $newname = $imageArray[0] . $randonum . '.' . $imageArray[1];
                    $routesave = "../frontend/views/images/" . $newname;
                    move_uploaded_file($_FILES["image"]["tmp_name"], $routesave);


                    $dateController['imagen'] = $routesave;
                    //var_dump($newname);
                    //echo "<br>";
                    //var_dump($dateController);
                    $saveArticle = articlesmodels::createArticleModel($dateController, "articles");

                    if ($saveArticle[0] == "exitoso") {
                        //header("location:articles/$saveArticle[0]/$saveArticle[1]");
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>REGISTRO EXITOSO / INGRESE NUEVO REGISTRO</strong>
                    </div>';
                    } else {

                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error al Registrar</strong>
                    </div>';
                    }
                }
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Error Ningun dato a sido enviado</strong>
    </div>';
        }
    }

    public function editArticleController()
    {

        $idArticle = explode("/", $_SERVER["REQUEST_URI"]);
        //var_dump($idArticle);
        if (isset($idArticle[4]) && is_numeric($idArticle[4])) {

            $answer = articlesmodels::editarticlemodel($idArticle, "articles");
            return $answer;
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>ID NO ENCONTRADO</strong>
    </div>';
        }
    }

    public function upgradeArticle()
    {
        if (isset($_POST['actualizar']) && $_POST['title'] != "") {
            $dateController = [
                "id" => $_POST["id_articles"],
                "categoria" => trim($_POST["category"]),
                "titulo" => trim($_POST["title"]),
                "contenido" => trim($_POST["contents"]),
                "publicacion" => trim($_POST["date"])
            ];
            //  var_dump($dateController);
            if ($_FILES['image']['error'] > 0) {

                // var_dump($dateController);

                if ($dateController["titulo"] == "" || $dateController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Campo Titulo o Contenido Vacios</strong>
                                </div>';
                } else {

                    $image = "";
                    $dateController['imagen'] = "";

                    echo "<br>";
                    // var_dump($dateController);
                    $upgradeArticle = articlesmodels::updateArticleModel($dateController, "articles");

                    if ($upgradeArticle[0] == "exitoso") {
                        //header("location:articles/$saveArticle[0]/$saveArticle[1]");
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>ACTUALIZACION EXITOSO / INGRESE NUEVO ACTUALIZACION RECARGE LA PAGINA</strong>
                                    </div>';
                    } else {

                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error al Registrar TESTING</strong>
                                    </div>';
                    }
                }
            } else {


                // var_dump($dateController);

                if ($dateController["titulo"] == "" || $dateController["contenido"] == "") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Campo Titulo o Contenido Vacios</strong>
                                </div>';
                } else {
                    //$temp = ;
                    $image = $_FILES["image"]["name"]; // Temporal
                    $imageArray = explode(".", $image);
                    $randonum = rand(1000, 9999);
                    $newname = $imageArray[0] . $randonum . '.' . $imageArray[1];
                    $routesave = "../frontend/views/images/" . $newname;
                    move_uploaded_file($_FILES["image"]["tmp_name"], $routesave);


                    $dateController['imagen'] = $routesave;
                    // var_dump($newname);
                    echo "<br>";
                    // var_dump($dateController);
                    $upgradeArticle = articlesmodels::updateArticleModel($dateController, "articles");

                    if ($upgradeArticle[0] == "exitoso") {
                        //header("location:articles/$saveArticle[0]/$saveArticle[1]");
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>ACTUALIZACION EXITOSO / INGRESE NUEVO ACTUALIZACION RECARGE LA PAGINA</strong>
                                    </div>';
                    } else {

                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error al Registrar</strong>
                                    </div>';
                    }
                }
            }
        }
    }

    public function deleteArticleController()
    {

        $idArticle = explode("/", $_SERVER["REQUEST_URI"]);
        //var_dump($idArticle);
        if (isset($idArticle[4]) && is_numeric($idArticle[4])) {
                $id = $idArticle[4];
            $answer = articlesmodels::deletearticlemodel($id, "articles");
            if($answer == "EXITOSO"){
                echo "EXITOSO ARTICULO BORRADO";
            }else{
                echo "ERROR AL BORRAR, NO SE PUDO BORRAR";
            }




        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>ID NO ENCONTRADO</strong>
    </div>';
        }
    }
}
