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



<?php include "views/includes/footer.php"; ?>