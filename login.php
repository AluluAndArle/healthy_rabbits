<?php
session_start();

$title = 'HealthyRabbits - Connexion';
include('views/partials/head.php');
include(__DIR__ . "/variable.php");

$error = '';
$success = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredEmail = $_POST['email'];
    $enteredPassword = $_POST['password'];

    $loginSuccessful = false;

    foreach ($users as $user) {
        if ($user['email'] === $enteredEmail && $user['password'] === $enteredPassword) {
            $loginSuccessful = true;
            break;
        }
    }

    if ($loginSuccessful) {
        $success = 'Vous avez été connecté avec succès!';
        header('Location: /');
        exit; 
    } else {
        $error = 'E-mail ou mot de passe invalide';
    }
}
?>

<div class="container login">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="card">
                <div class="card-header">
                    Connectez-vous !
                </div>
                <div class="card-body">
                    <?php if ($error !== ''): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($success !== ''): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $success; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer votre e-mail..">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Veuillez entrer votre mot de passe..">
                        </div>
                        <button type="submit" class="btn btn-success">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('views/partials/footer.php') ?>