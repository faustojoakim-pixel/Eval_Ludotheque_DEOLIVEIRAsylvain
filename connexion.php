<?php
session_start();

$message="";

if(isset($_POST['submit'])){
    $_SESSION['email'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION[ 'nom'] = $_POST ['nom'];
    $_SESSION [ 'prenom'] = $_POST ['prenom'];


 if ($email === $emailValide && $password === $passwordValide) {
        $_SESSION['email']  = $email;
        $_SESSION['nom']    = $nom;
        $_SESSION['prenom'] = $prenom;
        $message = "Bonne authentification";
        }else{
         $message ="Email et/ou mot de passe incorrect ";
     }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentconnexion ludotheque</title>
</head>
<body>
    <?php include('index.php') ?>
    <main>
        <h1>Accueil</h1>
        <section>
            <h2>Connexion</h2>
            <form action="" method="post">
                <input type="text" name="nom">
                <input type= "text" name="prenom">
                <input type="text" name="password">
                <input type="text" name="email>
                <input type="submit" name="submit">
               </form>



                <?php if ($message !== ""): ?>
                <p><?= htmlspecialchars($message) ?></p>
            <?php endif; ?>
                       
                 <?php if (isset($_SESSION['email'])): ?>
                <p>Vous êtes bien identifié(e),
                   <?= htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']) ?>.</p>

                             

          
            <p><?php endif; ?>
        </section>
    </main>
</body>
</html>






