<?php
ob_start();
session_start();

$title = 'HealthyRabbits - Inscription';
include 'views/partials/head.php';
require_once 'variable.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];

    foreach ($users as $existingUser) {
        if ($existingUser['email'] === $email) {
            echo '<div class="alert alert-danger">E-mail déjà utilisée !</div>';
            exit;
        } elseif ($existingUser['name'] === $name) {
            echo '<div class="alert alert-danger">Utillisateur déjà existant !</div>';
            exit;
        }
    }

    $users[] = $user;

    $data = "<?php\n\$users = " . var_export($users, true) . ";\n?>";
    file_put_contents('variable.php', $data);

    header('Location: /');
    exit;
}

require_once __DIR__ . "/views/register.view.php";

include 'views/partials/footer.php';
?>