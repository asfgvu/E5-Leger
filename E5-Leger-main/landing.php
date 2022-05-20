<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location: seConnecter.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing.css">

    <title>Mon Compte</title>
</head>
<body>
    <!---------------------------------- Navbar ---------------------------------->
   
    
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">CMCF</div>
        <ul class="links">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="conseils_formations.html">Conseils & Formations</a>
          <li><a href="#about">Recrutement</a></li>
          <li><a href="#projects">Livre</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
      </nav>

    <br>
    <br>
    <br>
    <h2>Bonjour ! <?php echo $_SESSION['user']; ?></h2>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>
    <br>
    <br>
    <a href="supression.php" class="btn btn-danger btn-lg">Supprimer Mon Compte</a>
</body>
</html>