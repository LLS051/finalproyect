<?php 

session_start();

if(!isset($_SESSION['validate'])){
    header('location:login');
    exit();
}

include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/sidebar.php";
include "views/includes/content-wrapper.php";

?>
<?php 

$deleteArticle = new articleController();
$deleteArticle-> deleteArticleController();


?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listarticle = new articleController();
                    $answer = $listarticle->getarticleController();
                    foreach ($answer as $articles) :
                 //var_dump($answer);
                    ?>
                        <tr>
                            <td><?php echo $articles->id_articles ?></td>
                            <td><?php echo $articles->category ?></td>
                            <td><?php echo $articles->title  ?></td>
                            <td><?php echo $articles->contents  ?></td>
                            <td><img src="<?php echo $articles->image  ?>" alt="" height="80px" width="80px"></td>
                            <td><a href="<?= ROUTE_BACKEND?>editArticles/<?php echo $articles->id_articles?>" role="button" id="" name="" class="btn btn-primary">Edit</a></td>
                            <td><a href="<?= ROUTE_BACKEND?>deleteArticles/<?php echo $articles->id_articles?>" role="button" id="" name="" class="btn btn-danger">Eliminar</a></td>

                        </tr>
                    <?php endforeach; ?>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>Categoria</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
        </div>
    </div>
</div>

<?php include "views/includes/footer.php"; ?>