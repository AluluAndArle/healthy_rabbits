<?php
$title = 'HealthyRabbits - Inscription';
include('views/partials/head.php');

$loggedIn = isset($loggedIn) && $loggedIn;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('variable.php');

    $user = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];

    $users[] = $user;

    $data = "<?php\n\$users = " . var_export($users, true) . ";\n?>";
    file_put_contents('variable.php', $data);

    header('Location: /');
    exit;
}
?>

<div class="container register">
    <div class="card text-center">
        <div class="card-header">
            Inscrivez-vous !
        </div>
        <div class="card-body">
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label for="name">Nom d'utilisateur:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Veuillez choisir un nom d'utilisateur.." required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez choisir un e-mail.." required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez choisir un mot de passe.." required>
                </div>
                <button type="submit" class="btn btn-success">S'inscrire</button>
            </form>
        </div>
    </div>
</div>

<?php include('views/partials/footer.php') ?>
