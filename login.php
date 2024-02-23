<?php 
$title = 'HealthyRabbits - Connexion';
include('views/partials/head.php');
?>

<div class="container login">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center"> 
            <div class="card">
                <div class="card-body">
                    <h2>Connexion</h2>
                    <form method="POST">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Veuillez entrer votre e-mail..">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" placeholder="Veuillez entrer votre mot de passe..">
                        </div>
                        <button type="submit" class="btn btn-success">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('views/partials/footer.php') ?>
