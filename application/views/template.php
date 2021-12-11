<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD DE PERSONAL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=ROUTE_BACKEND ?>views/plugins/summernote/summernote-bs4.min.css">
</head>

<?php 

linksController::linkController();

?>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=ROUTE_BACKEND ?>views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=ROUTE_BACKEND ?>views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=ROUTE_BACKEND ?>views/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/jszip/jszip.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=ROUTE_BACKEND ?>views/plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?=ROUTE_BACKEND ?>views/js/init.js"></script>
</body>
</html>
