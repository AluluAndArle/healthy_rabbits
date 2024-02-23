<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erreur 404</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .gps-button-wrapper .gps-button {
      border-radius: 25px 25px 25px 25px;
      text-shadow: 1px 1px 6px black;
      border: solid 4px #666103;
      background: #A59E00;
      color: #fff;
      font: bold 30px/1.25 "Raleway", Helvetica, Arial, sans-serif;
      text-decoration: none;
      padding: 10px 15px;
      overflow: hidden;
      border-radius: 100px;
      font-size: 15px;
      animation: glow-effect 1.5s linear infinite alternate;
    }

    @keyframes glow-effect {
      0% {
        background-color: #fd2c5a;
      }

      100% {
        box-shadow: 0 0 15px #ecdc63;
        background-color: #A59E00;
      }
    }

    .gps-button-wrapper .gps-button {
      background: linear-gradient(55deg, #d2c900 15%, #b2ab00 37%, #A59E00 40%) center right / 300% 100% no-repeat;
      transition: all .75s ease-in-out;
    }

    .gps-button-wrapper .gps-button:hover {
      background-position: center left;
    }
  </style>
</head>

<body>
  <div class="container text-center">
    <img src="https://media1.tenor.com/m/aE5x0SVlDUcAAAAC/fatsa-buggs.gif" height="300" width="300">
    <h1 class="display-4">Erreur 404</h1>
    <p class="lead">La page que vous recherchez est introuvable.</p>
    <div class="gps-button-wrapper">
      <a href="/" class="gps-button" href="#">Retour à l'accueil</a>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>