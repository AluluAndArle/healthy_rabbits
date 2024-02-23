<?php
$title = 'Contact : Confirmation'; ?>

<?php require_once(__DIR__ . "/views/partials/head.php") ?>

<?php if (!isset($_POST['email']) || !isset($_POST['message']) || !isset($_POST['pseudo']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['message'])) {
    echo " <h2>merci de remplir le formulaire </h2>";
} else {
    ?>
    <?php require_once(__DIR__ . "/views/contactValide.view.php") ?>
<?php } ?>
<?php require_once(__DIR__ . "/views/partials/footer.php") ?>