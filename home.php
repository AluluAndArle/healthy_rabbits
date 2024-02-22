<?php
session_start();
$title = 'HealthyRabbits - Accueil';
include('views/partials/head.php');
?>
<?php require_once(__DIR__ . "/views/home.view.php") ?>
<?php include('views/partials/footer.php')
    ?>