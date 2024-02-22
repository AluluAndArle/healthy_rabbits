<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <title><?php if (isset($title)) {
                echo $title;
            } ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" id="nav1">
        <a href="/"><img src="/img/logo.png" height="100" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link hvr-grow" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" href="food">Alimentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" href="toys">Jouets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" href="accessories">Accessoires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" href="about">A Propos</a>
                </li>
            </ul>
        </div>
            <a class="hvr-grow" href="login"><img src="/img/login.png" height="50" class="navbar-brand" id="login"></a>
            <a class="hvr-grow" href="register"><img src="/img/register.png" height="50" class="navbar-brand" id="register"></a>
            <a class="hvr-grow" href="logout"><img src="/img/logout.png" height="50" class="navbar-brand" id="logout"></a>
    </nav>