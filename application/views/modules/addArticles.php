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
            
            $addArticle = new articleController();
            $addArticle->addArticleController();
            
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
                        <div class="form-group px-2">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" placeholder="Ingresa el titulo" name="title" required>
                        </div>
                        <div class="form-group px-2">
                            <label for="contenido">Contenido</label>
                            <br>
                            <textarea name="contents" id="summernote" cols="80" rows="10"></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-outline card-info">
                        <div class="form-group px-2">
                            <label for="date">Fecha de Creacion</label>
                            <input type="text" class="form-control" placeholder="Ingresa la fecha de creacion" name="date" value="<?php $date = date("Y-m-d") ?>">
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
                            <label for="imageArt">Imagen</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group px-2">
                            <button type="submit" class="btn btn-primary w-100" name="crear">Crear Articulo</button>
                        </div>

                    </div>
                </div>



        </form>

    </div>
</div>

<?php include "views/includes/footer.php"; ?>