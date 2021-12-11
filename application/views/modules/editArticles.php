<?php

session_start();

if (!isset($_SESSION['validate'])) {
    header('location:login');
    exit();
}

include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/sidebar.php";
include "views/includes/content-wrapper.php";

?>


<div class="content">
    <div class="row">
        <div class="col-12">

            <?php 
            
            $editArticle = new articleController();
            $answer = $editArticle->editArticleController();
            $upgradeArticle = new articleController;
            $upgradeArticle->upgradeArticle();
            
            ?>



        </div>
    </div>
</div>



<div class="content">
    <div class="container-fluid">

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-8">
                    <div class="card card-outline card-info">
                        <input type="hidden" name="id_articles" value="<?php echo isset($answer->idArticle) ? $answer->idArticle : "" ?>"> 
                        <div class="form-group px-2">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" required value="<?php echo isset($answer->Title) ? $answer->Title : "" ?>">
                        </div>
                        <div class="form-group px-2">
                            <label for="contenido">Contenido</label>
                            <br>
                            <textarea name="contents" id="summernote" cols="80" rows="10">
                           <?php echo isset($answer->Contents) ? $answer->Contents : "" ?>
                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-outline card-info">
                        <div class="form-group px-2">
                            <label for="date">Fecha de Creacion</label>
                            <input type="text" class="form-control"  name="date" value="<?php echo isset($answer->Date) ? $answer->Date : "" ?>"">
                        </div>
                        <div class="form-group px-2">
                            <label for="categoryArt">Categoria de Articulos</label>
                            <?php 
                            
                            
                            
                            ?>
                            <select name="category" class="form-control">
                                <option value="1">Zapatos</option>
                                <option value="2">Camisas</option>
                                <option value="3">Pantalones</option>
                            </select>
                        </div>
                        <div class="form-group px-2">
                            
                            <img src="<?php echo "../".$answer->Image ?>" alt="" height="200" width="auto"><br>
                            <label for="imageArt">Imagen:</label> <br>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group px-2">
                            <button type="submit" class="btn btn-primary w-100" name="actualizar">Actualizar Articulo</button>
                        </div>

                    </div>
                </div>



        </form>

    </div>
</div>

<?php include "views/includes/footer.php"; ?>