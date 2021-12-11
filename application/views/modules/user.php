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

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="listarUsuarios" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Usuario</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Imagen</th>
                        <th>Roll</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listuser = new userController();
                    $answer = $listuser->getUserController();

                    foreach ($answer as $users) :
                    ?>
                        <tr>
                            <td><?php echo $users->id_user ?></td>
                            <td><?php echo $users->nick_user ?></td>
                            <td><?php echo $users->name_user ?></td>
                            <td><?php echo $users->email_user ?></td>
                            <td><img src="<?php echo $users->imagen_user ?>" alt="" height="80px" width="80px"></td>
                            <td><?php echo $users->status ?></td>
                            <td><?php echo $users->phone ?></td>
                            <td><?php echo $users->roll ?></td>

                        </tr>
                    <?php endforeach; ?>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Usuario</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Imagen</th>
                        <th>Roll</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php include "views/includes/footer.php"; ?>