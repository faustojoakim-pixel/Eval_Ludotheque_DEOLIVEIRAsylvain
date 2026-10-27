<?php
$message = "";

if ($email === $emailValide && $password === $passwordValide) {
        $_SESSION['email']  = $email;
        $_SESSION['nom']    = $nom;
        $_SESSION['prenom'] = $prenom;
        $message = "Bonne authentification";

        $message= "bonjour, [$prenom],Accueil,Ajouter un jeu,Deconnexion";
        }else{
        $message= "Accueil,Inscription et Connexion";   
        }









?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludotheque</title>
    <link rel="stylesheet" href "src/css/style.css">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                 <li><a href="inscription.php">Acceuil</a></li>
                 <li><a href="connexion.php">Acceuil</a></li>

</ul>
</nav>
</header>


  </body>
</html>