<?php
ob_start();
session_start();

$title = 'HealthyRabbits - Connexion';
include('views/partials/head.php');
require_once(__DIR__ . "/variable.php");

$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredEmail = $_POST['email'];
    $enteredPassword = $_POST['password'];

    $loginSuccessful = false;

    foreach ($users as $user) {
        if ($user['email'] === $enteredEmail && $user['password'] === $enteredPassword) {
            $_SESSION['user_email'] = $enteredEmail;
            $loginSuccessful = true;
            break;
        }
    }

    if (!$loginSuccessful) {
        echo '<div class="alert alert-danger">E-mail ou mot de passe invalide.</div>';
        exit;
    }

    if ($loginSuccessful) {
        header('Location: /');
        exit;
    } else {
        $error = 'E-mail ou mot de passe invalide.';
    }
}

?>

<?php require_once(__DIR__ . "/views/login.view.php");
include('views/partials/footer.php');
?>