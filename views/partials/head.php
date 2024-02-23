<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link href="https://fonts.cdnfonts.com/css/cipthayasa" rel="stylesheet">
    <title>
        <?php if (isset($title)) {
            echo $title;
        } ?>
    </title>
    <style>
        body {
            animation: fadeIn 1s ease-in-out;
            background-image: url("/img/background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 120vh;
            user-select: none;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .navbar-brand:hover {
            animation: shining 1s infinite;
        }

        @keyframes shining {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .logo {
            transition: 0.5s ease-in;
        }

        #nav1 {
            background: rgba(255, 255, 255, 0.6);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="nav1">
        <a href="/"><img src="/img/logo.png" height="100" class="navbar-brand logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link hvr-grow text-light" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow text-light" href="food">Alimentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow text-light" href="toys">Jouets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow text-light" href="accessories">Accessoires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow text-light" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow text-light" href="about">A Propos</a>
                </li>
            </ul>
        </div>
        <?php if (isset($_SESSION['user_email'])): ?>
            <a class="hvr-grow" href="logout"><img src="/img/logout.png" height="40" class="navbar-brand" id="logout"></a>
        <?php else: ?>
            <a class="hvr-grow" href="login"><img src="/img/login.png" height="40" class="navbar-brand" id="login"></a>
            <a class="hvr-grow" href="register"><img src="/img/register.png" height="40" class="navbar-brand"
                    id="register"></a>
        <?php endif; ?>

    </nav>